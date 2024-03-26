<?php
namespace App\Controller;

use App\Service\rpx;
use App\Entity\Documenti;
use App\Entity\Teste;
use App\Entity\Veicoli;
use App\Form\TesteType;
use App\Repository\TesteRepository;
use App\Repository\DocumentiRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Righe;
use Datetime;
use Symfony\Component\HttpFoundation\JsonResponse;
use Dompdf\Dompdf;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;


 
#[IsGranted('ROLE_USER')]
#[Route('/teste')]
class TesteController extends AbstractController
{

    #[Route('/', name: 'app_teste_index',methods: ['GET', 'POST'])]
    public function index(EntityManagerInterface $em, TesteRepository $testeRepository,Request $request,SessionInterface $session, rpx $rpx): Response
    {
        $href_new = $this->generateUrl('app_teste_dett',[
            'id_testa'=>0,
        ]);

        $defaultData = $session->get('filtro_teste_index', ['terminato' => 0]);

        $form = $this->createFormBuilder($defaultData)
            ->add('terminato', ChoiceType::class, [
                'label' => 'Stato Documenti',
                'choices'  => [
                    'Aperti' => 0,
                    'Chiusi' => 1,
                    'Tutti' => -1,
                ],
            ])
            ->add('filtro', SubmitType::class, ['label' => 'Filtro'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();
            $session->set('filtro_teste_index', $data);
        }else{
            $data=$defaultData;
            $session->set('filtro_teste_index', $data);
        }
            
        $aLab = $testeRepository->getTesteCanBeShowInIndex( $data);

        //dd($aLab);
        return $this->render('teste/index.html.twig', [
            'aLab' => $aLab,
            'href_new' =>$href_new,
            'form' =>$form,
            
        ]);
    }



    #[Route('/dettaglio/{id_testa}', name: 'app_teste_dett')]
    public function app_teste_dett(Request $request, EntityManagerInterface $em,int $id_testa,rpx $rpx): Response
    {   
        $ok_modifica = $request->request->get("ok_modifica");
       
      

        if ($id_testa==0){
            // entro come nuovo record, devo poterlo inserire
            if (is_null($ok_modifica)){
                $ok_modifica = 1;
            }
            $testa = new Teste;
            $testa->setDataDoc(new DateTime);
        }
        else{
            // entro nel dettaglio
            if (is_null($ok_modifica)){
                $ok_modifica = 0;
            }

            $testa =  $em->getRepository(Teste::class)->find($id_testa);
            
            
        }
        //dd($testa);

        $form = $this->createForm(TesteType::class,$testa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if ($ok_modifica==0){
                $testa = $em->getRepository(Teste::class)->save($testa,true);
                // devo ritornare al dettaglo cdella form
                return $this->redirectToRoute('app_teste_dett', ["id_testa"=>$testa->getid()], Response::HTTP_SEE_OTHER);
            }
        }

        $href_Back2Lista = $this->generateUrl('app_teste_index');
        $href_stampa_doc = $this->generateUrl('app_stampa_doc',["id_testa"=>$id_testa]);
        $href_chiudi_doc = $this->generateUrl('app_chiudi_doc',["id_testa"=>$id_testa]);
        $href_apri_doc = $this->generateUrl('app_apri_doc',["id_testa"=>$id_testa]);
        $href_nuova_anomalia = $this->generateUrl('riga_dettaglio',["id_riga"=>0,"id_testa"=>$id_testa]);
        if ($id_testa>0){
        $href_Annulla = $this->generateUrl('app_teste_dett',[
            'id_testa'=>$id_testa
        ]);
            } else{
                // se sono ne nuovo devo tornare alla lista e NON salvare nulla
            $href_Annulla = $this->generateUrl('app_teste_index');
            }


        return $this->render('teste/testa_dettaglio.html.twig', [
            'testaform' =>$form->createView(),
            'testa'=>$testa,
            'ok_modifica'=>$ok_modifica,
            'href_Back2Lista'=>$href_Back2Lista,
            'href_Annulla'=>$href_Annulla,
            'id_testa'=>$id_testa,
            'href_stampa_doc'=>$href_stampa_doc,
            'href_chiudi_doc'=>$href_chiudi_doc,
            'href_apri_doc'=>$href_apri_doc,
            'href_nuova_anomalia'=>$href_nuova_anomalia,


        ]);


    }

    #[Route('/list/documenti/{id_veicolo}', name: 'app_list_documenti', methods: ['GET'])]
    public function app_list_documenti(Request $request, EntityManagerInterface $entityManager, int $id_veicolo): Response
{
   
    $repositoryDocumenti = $entityManager->getRepository(Documenti::class);    
    
    $data = $repositoryDocumenti->list($id_veicolo);
    
    return new JsonResponse($data);
}

#[Route('/upload/{id_veicolo}', name: 'app_upload_doc', methods: ['GET', 'POST'])]
public function app_upload_doc(Request $request, EntityManagerInterface $entityManager, int $id_veicolo): Response
{
    
    /** @var UploadedFile $file */
    $file = $request->files->get('file');

    // Genera un UUID único usando uniqid
    $uuid = uniqid();
    
    $originalName = $file->getClientOriginalName();
    $extension = $file->getClientOriginalExtension();
    $filename = $originalName . '_' .$uuid . '.' . $extension;
    $uploadsDirectory = $this->getParameter('kernel.project_dir') . '/public/uploads';
    $file->move($uploadsDirectory, $filename);
    
    $data = [
        'id_veicolo' => $id_veicolo,
        'description' => $originalName, 
        'path' => '/uploads/' . $filename, 
        'created_at' => date('Y-m-d H:i:s'), 
    ];
    
    
    $entityManager->getConnection()->insert('files', $data);
    
    return new JsonResponse(['message' => 'Archivo cargado correctamente']);
}


//elimina file

#[Route('/elimina/{idfile}', name: 'app_elimina_doc', methods: ['GET'])]
public function eliminafile(EntityManagerInterface $entityManager, int $idfile): Response
{
    $file = $entityManager->getRepository(Documenti::class)->find($idfile);
    
    if (!$file) {
        return new JsonResponse(['message' => 'File no encontrado'], 404);
    }

    $entityManager->remove($file);
    $entityManager->flush();

    return new JsonResponse(['message' => 'File eliminado']);
}

//fin funcion elimina file


    #[Route('/chiudi_doc/{id_testa}', name: 'app_chiudi_doc', methods: ['GET', 'POST'])]
    public function app_chiudi_doc(rpx $rpx,Request $request, EntityManagerInterface $em, TesteRepository $testeRepository,int $id_testa): Response
    {

        $testa = $testeRepository->find($id_testa);
        $testa->setTerminato(1);
        $testa = $testeRepository->save($testa,true);
        return $this->redirectToRoute('app_teste_dett', ["id_testa"=>$id_testa], Response::HTTP_SEE_OTHER);

    }

    #[Route('/apri_doc/{id_testa}', name: 'app_apri_doc', methods: ['GET', 'POST'])]
    public function app_apri_doc(rpx $rpx,Request $request, EntityManagerInterface $em, TesteRepository $testeRepository,int $id_testa): Response
    {

        $testa = $testeRepository->find($id_testa);
        $testa->setTerminato(0);
        $testa = $testeRepository->save($testa,true);
        return $this->redirectToRoute('app_teste_dett', ["id_testa"=>$id_testa], Response::HTTP_SEE_OTHER);

    }



    #[Route('/stampa_doc/{id_testa}/{ok_pdf}', name: 'app_stampa_doc', methods: ['GET', 'POST'])]
    public function app_stampa_doc(rpx $rpx,Request $request, EntityManagerInterface $em, TesteRepository $testeRepository,int $id_testa,int $ok_pdf = 1): Response
    {
        $testa = $testeRepository->find($id_testa);
        $righe = $em->getrepository(Righe::class)->getRigheByTesta($id_testa);
        $veicolo = $em->getrepository(Veicoli::class)->getVeicolowebById($testa->getIdVeicolo());
        $docmodelli = $_SERVER["RP_DOCMODELLI"];
        $doctemp = $_SERVER["RP_DOCTEMP"];
        $rp_crlfdocx = $_SERVER["RP_CRLFDOCX"];
       
        

        switch($testa->getTipoIntervento()){
                case "Programmata":
                    $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($docmodelli.'/oli_ordinaria.docx');
                    $templateProcessor->setValue('data_doc', $testa->getDataDocFormat('d/m/Y'));            // On section/content
                    $templateProcessor->setValue('targa', $veicolo['targa']);            // On section/content
                    $templateProcessor->setValue('db', $veicolo['db']);            // On section/content
                    $templateProcessor->setValue('km', $testa->getKmAttuali());            // On section/content
                    $templateProcessor->setValue('numero_doc',$testa->getTipoDoc().' '.$testa->getNumeroDoc());            // On section/content
                    $nn=count($righe);
                    $templateProcessor->cloneRow('riga_intervento', $nn);
                    $n1 = 0;
                    foreach($righe as $r){
                     $n1++;
                     $desc = $r["intervento"];
                     if (!empty($desc)){
                         $desc.=$rp_crlfdocx;
                     }
                     $desc.= $r["descrizione_anomalia"];
                     $templateProcessor->setValue('riga_intervento#'.$n1, $desc);
                     $templateProcessor->setValue('riga_intervento_eseguito#'.$n1, $r["descrizione_intervento"]);
                     $templateProcessor->setValue('riga_ore#'.$n1, $r["ore"]);
                     $templateProcessor->setValue('riga_meccanico#'.$n1, $r["id_meccanico"]);
                    }
                    $fname_unico=$rpx->get_random_name("oli_ordinaria");

                break;
                case "Straordinaria":
                    $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($docmodelli.'/oli_straordinaria.docx');
                    $templateProcessor->setValue('data_doc', $testa->getDataDocFormat('d/m/Y'));            // On section/content
                    $templateProcessor->setValue('targa', $veicolo['targa']);            // On section/content
                    $templateProcessor->setValue('db', $veicolo['db']);            // On section/content
                    $templateProcessor->setValue('km', $testa->getKmAttuali());            // On section/content
                    $templateProcessor->setValue('numero_doc',$testa->getTipoDoc().' '.$testa->getNumeroDoc());            // On section/content
                    $nn=count($righe);
                    $templateProcessor->cloneRow('riga_anomalia', $nn);
                    $n1 = 0;
                    foreach($righe as $r){
                        $n1++;
                        $desc= $r["descrizione_anomalia"];
                        $templateProcessor->setValue('riga_anomalia#'.$n1, $desc);
                        $templateProcessor->setValue('riga_intervento_eseguito#'.$n1, $r["descrizione_intervento"]);
                        $templateProcessor->setValue('riga_ore#'.$n1, $r["ore"]);
                        $templateProcessor->setValue('riga_meccanico#'.$n1, $r["id_meccanico"]);
                    }
                    $fname_unico=$rpx->get_random_name("oli_straordinaria");
                break;
    

        }
        
       /////////////////////////////////////////////////// nuovo metodo stampa
       
       
       $docxFilePath =$doctemp.'/'.$fname_unico.'.docx';
       $templateProcessor->saveAs($docxFilePath);
       $pdfFilePath = $rpx->get_docx2pdf($docxFilePath);
       if (!file_exists($pdfFilePath)) {
        return new Response("Errore:".$pdfFilePath, 500);
        }

       $response = new BinaryFileResponse($pdfFilePath);
        $nome_finale = $testa->gettipodoc().'_'. $testa->getNumeroDoc().'_'. $testa->getDataDocFormat('d_m_Y');
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $nome_finale.'.pdf'
        );

        //$rpx->eliminaFileAction($pdfFilePath);
        // ResponseHeaderBag::DISPOSITION_ATTACHMENT,
        // ResponseHeaderBag::DISPOSITION_INLINE,
        
        return $response;



    }
    

    #[Route('/new', name: 'app_teste_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, TesteRepository $testeRepository): Response
    {
        // creo una riga temporanea da trasformare poi in reale
        $teste = new Teste();
        $teste->setIdTReal(- 1); // setto a -1 che vuol dire = nuova testa da inserire
        $teste->setTipoDoc("OLI");
        $teste->setNumeroDoc(0);
        $date = new DateTime();
        $teste->setDataDoc($date);
        $teste->setIdVeicolo(0);
        $teste->setIdMeccanico(0);
        $teste->setTipoIntervento("");
        $teste->setDataCreazione($date);
        $teste->setDataModifica($date);
        $teste->setUtenteCreazione(0);
        $teste->setState("IN PROGRESS");
        $entityManager->persist($teste);

        $entityManager->flush();

        $form = $this->createFormBuilder($teste)
            ->add('tipo_doc', ChoiceType::class, [
            'choices' => [
                'OLI' => 'OLI',
                'OLE' => 'OLE',
                'COL' => 'COL',
                'TAC' => 'TAC'
            ]
        ])
            ->add('id_meccanico')
            ->
        add('id_veicolo', TextType::class, [
            'label' => 'Id Veicolo'
        ])
            ->
        getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            return $this->redirectToRoute('app_teste_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('teste/new.html.twig', [
            'title_form' => 'Aggiungi Nuova Testa',
            'teste' => $teste,
            'form' => $form,
            'veicoli' => "",
            'defaultSelected' => $teste->getIdVeicolo()
        ]);
    }

    #[Route('/{id}', name: 'app_teste_show', methods: ['GET'])]
    public function show(Teste $teste): Response
    {
        return $this->render('teste/show.html.twig', [
            'teste' => $teste
        ]);
    }

    #[Route('/{id}/edit', name: 'app_teste_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, EntityManagerInterface $entityManager, Teste $teste, TesteRepository $testeRepository): Response
    {
        $descrizioneVeicolo = "";
        if ($teste->getIdVeicolo() != null) {
           $veicolo = $entityManager->getRepository(Veicoli::class)->getVeicoloDescriptionByIdVeicolo($teste->getIdVeicolo());
           $descrizioneVeicolo = $veicolo[0]->getDescrizion();
        }
        
            
        $testeNew = null;
        if ($teste->getIdTReal() == 0) {
            $testeNew = new Teste();

            $testeNew->setIdTReal($teste->getId()); // setto a uno che vuol dire = nuova testa da inserire

            $testeNew->setTipoDoc($teste->getTipoDoc());
            $testeNew->setNumeroDoc(0);
            // $dateImmutable = \DateTime::createFromFormat('Y-m-d H:i:s', strtotime('now'));
            $date = new DateTime();
            $testeNew->setDataDoc($teste->getDataDoc());
            $testeNew->setIdVeicolo($teste->getIdVeicolo());
            $testeNew->setIdMeccanico($teste->getIdMeccanico());
            $testeNew->setTipoIntervento($teste->getTipoIntervento());
            $testeNew->setDataCreazione($teste->getDataCreazione());
            $date = new DateTime();
            $testeNew->setDataModifica($date);
            $testeNew->setUtenteCreazione($teste->getUtenteCreazione());
            $testeNew->setState("IN PROGRESS");
            $entityManager->persist($testeNew);
            
            
            $teste->setIdTReal(-2);
            $teste->setState("UPDATED");
            $entityManager->flush();
            
            //MASSY MODIFICARE ID_T_FK PER ANOMALIA ESISTENTI TO_DO
        } else {
            $testeNew = $teste;
        }

        $form = $this->createFormBuilder($testeNew)
            ->add('tipo_doc', ChoiceType::class, [
            'choices' => [
                $teste->getTipoDoc() => $teste->getTipoDoc(),
                'OLI' => 'OLI',
                'OLE' => 'OLE',
                'COL' => 'COL',
                'TAC' => 'TAC'
            ]
        ])
            ->add('id_meccanico')
            ->add('id_veicolo', TextType::class, [
            'label' => 'Id Veicolo'
        ])->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $teste->setIdTReal(0); //setto a default
            // $entityManager->flush();

            return $this->redirectToRoute('app_teste_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('teste/new.html.twig', [
            'title_form' => 'Modifica Testa',
            'teste' => $testeNew,
            'form' => $form,
            'veicoli' =>  $descrizioneVeicolo,
            'defaultSelected' => $testeNew->getIdVeicolo()
        ]);
    }

    #[Route('/update/record/{id_teste}/{id_veicolo}/{id_meccanico}/{tipo_doc}', name: 'app_teste_update', methods: ['GET', 'POST'])]
    public function update(Request $request, EntityManagerInterface $entityManager, int $id_teste, int $id_veicolo, int $id_meccanico, string $tipo_doc): Response
    {
        $testeUpd = $entityManager->getRepository(Teste::class)->getTesteForTesteId($id_teste);
        $testeUpd[0]->setIdMeccanico($id_meccanico);
        $testeUpd[0]->setIdVeicolo($id_veicolo);
        $testeUpd[0]->setTipoDoc($tipo_doc);
        $entityManager->flush();

        return new JsonResponse();
    }
    
    
    #[Route('/delete/{id_testa}', name: 'app_teste_delete_proc', methods: ['GET'])]
    public function deleteProcess(EntityManagerInterface $em, int $id_testa):Response
    {
        $testa = $em->getRepository(Teste::class)->find($id_testa);
        $em->getRepository(Teste::class)->remove($testa,true);
/*

        $testeDelete = $entityManager->getRepository(Teste::class)->getTesteForTesteId($id_teste);
        $testeRepository = $entityManager->getRepository(Teste::class);
        
        if ($testeDelete[0]->getIdTReal() != -1 && $testeDelete[0]->getIdTReal() != -2 && $testeDelete[0]->getIdTReal() != 0) {
            $testeSource = $entityManager->getRepository(Teste::class)->getTesteForTesteId($testeDelete[0]->getIdTReal());
            $testeSource[0]->setIdTReal(0);
            $testeSource[0]->setState("OK");
            $entityManager->flush();
            $testeRepository->remove($testeDelete[0], true);
        } else  {
            //Caso in cui la testa id � in arrivo � quella originale
            $testaTemp = $testeRepository->getTesteForIdTesteReal($testeDelete[0]->getId());
            if ($testaTemp != null) {
                $testeDelete[0]->setIdTReal(0);
                $testeDelete[0]->setState("OK");
                $entityManager->flush();
                $testeRepository->remove($testaTemp[0], true);                
            }            
        }        
        $entityManager->flush();
        */
                
        return $this->redirectToRoute('app_teste_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/confirm/{id_teste}/{id_veicolo}/{id_meccanico}/{tipo_doc}', name: 'app_teste_confirm_add', methods: ['GET'])]
    public function confirmAdd(EntityManagerInterface $entityManager, int $id_teste, int $id_veicolo, int $id_meccanico, string $tipo_doc): Response
    {
        $testeUpd = $entityManager->getRepository(Teste::class)->getTesteForTesteId($id_teste);

        if ($testeUpd[0]->getIdTReal() == - 1  || $testeUpd[0]->getIdTReal() == -2) {
            $testeUpd[0]->setIdTReal(0); // setto a default
            $testeUpd[0]->setState("OK");
            $testeUpd[0]->setIdVeicolo($id_veicolo);
            $testeUpd[0]->setIdMeccanico($id_meccanico);
            $testeUpd[0]->setTipoDoc($tipo_doc);
            
            $entityManager->flush();
            $testeInProgressToDelete = $entityManager->getRepository(Teste::class)->getTesteForIdTesteReal($id_teste);
            if ($testeInProgressToDelete != null ) {
                $entityManager->getRepository(Teste::class)->remove($testeInProgressToDelete[0], true);
            }
            $entityManager->flush();
        } else {
            $testeOriginal = $entityManager->getRepository(Teste::class)->getTesteForTesteId($testeUpd[0]->getIdTReal());

            $testeOriginal[0]->setTipoDoc($tipo_doc);
            $testeOriginal[0]->setNumeroDoc($testeUpd[0]->getNumeroDoc());
            $testeOriginal[0]->setDataDoc($testeUpd[0]->getDataDoc());
            $testeOriginal[0]->setIdVeicolo($id_veicolo);
            $testeOriginal[0]->setIdMeccanico($id_meccanico);
            $testeOriginal[0]->setTipoIntervento($testeUpd[0]->getTipoIntervento());
            $testeOriginal[0]->setDataCreazione($testeUpd[0]->getDataCreazione());
            $date = new DateTime();
            $testeOriginal[0]->setDataModifica($date);
            $testeOriginal[0]->setUtenteCreazione($testeUpd[0]->getUtenteCreazione());
            $testeOriginal[0]->setIdTReal(0);
            $testeOriginal[0]->setState("OK");
            $entityManager->getRepository(Teste::class)->save($testeOriginal[0], true);
            //Rimuovo teste temporanea
            $entityManager->getRepository(Teste::class)->remove($testeUpd[0], true);
            
            $entityManager->getRepository(Righe::class)->moveRigheFromTempToOriginal($id_teste,$testeUpd[0]->getIdTReal());
                      
            //MASSY SISTEMARE ID_T_FK DELLE ANOMALIA CHE PUNTANO AL TEMPORANEO
        }
        $entityManager->flush();
        
        return $this->redirectToRoute('app_teste_index', [], Response::HTTP_SEE_OTHER);
    }
    

    #[Route('/delete/all/{id}', name: 'app_teste_delete', methods: ['GET','POST'])]
    public function delete(Request $request, EntityManagerInterface $entityManager, Teste $teste, TesteRepository $testeRepository): Response
    {

        $testeToDelete = $testeRepository->getTesteForIdTesteReal($teste->getIdTReal());
        $entityManager->getRepository(Righe::class)->deleteAllRigheForTestaId($teste->getId(),$teste->getIdTReal() );
        if ($testeToDelete != null) {
            $testeRepository->remove($testeToDelete[0], true);
        }
                
       $testeRepository->remove($teste, true);
        
       
        
        return $this->redirectToRoute('app_teste_index', [], Response::HTTP_SEE_OTHER);
    }
}
