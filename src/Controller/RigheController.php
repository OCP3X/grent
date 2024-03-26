<?php

namespace App\Controller;

use App\Entity\Righe;
use App\Entity\Teste;
use App\Form\RigheType;
use App\Repository\RigheRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;
use \Datetime;
use App\Entity\Lavagna;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/righe')]
class RigheController extends AbstractController
{
    
    #[Route('/dettaglio/{id_riga}/{id_testa}', name: 'riga_dettaglio')]
    public function riga_dettaglio(Request $request,EntityManagerInterface $em,int $id_riga, int $id_testa = 0): Response
    {   

        // id_riga = 0 -> new allora deve essere presene id_testa
        // id_riga >0 ok così
        if ($id_riga==0){
            $riga = new Righe();
            $riga->setIdTestaFk($id_testa);
            $riga->setIdLFk(0);
            

        }else{
            $riga =  $em->getRepository(Righe::class)->find($id_riga);
            $id_testa = $riga->getIdTestaFk();
        }
        $teste = $em->getRepository(Teste::class)->find($id_testa);
        
        $href_cancel = $this->generateUrl('app_teste_dett', ['id_testa' => $id_testa]);

        $form = $this->createForm(RigheType::class, $riga);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

                $em->getRepository(Righe::class)->save($riga,true);
                // devo ritornare al dettaglo cdella form
                return $this->redirectToRoute('app_teste_dett', ["id_testa"=>$id_testa]);
            
        }



        return $this->render('righe/dettaglio_riga.html.twig', [
            'RigaForm' => $form,
            'href_cancel' => $href_cancel,
            'teste' => $teste,
        ]);

        
        
        
    }





    #[Route('/evadi_lavagna/{id_testa}/{id_l}', name: 'righe_evadi_lavagna', methods: ['GET'])]
    public function righe_evadi_lavagna(EntityManagerInterface $em,int $id_testa,int $id_l): Response
    {   

        
        $lavagna = $em->getRepository(Lavagna::class)->find($id_l);
        $riga = new Righe();
        $riga->setIdTestaFk($id_testa);
        $riga->setIdLFk($id_l);
        $riga->setDescrizioneAnomalia($lavagna->getAnomalia());
        $em->getRepository(Righe::class)->save($riga,true);
        return new Response(
            $riga->getid()
        );
        
        
        
    }

    #[Route('/testa/{id_testa}', name: 'righe_testa', methods: ['GET'])]
    public function righe_testa(EntityManagerInterface $em,int $id_testa): Response
    {   

        $righe = $em->getRepository(Righe::class)->getRigheForTesta($id_testa);
        $aLab= array();
            foreach($righe as $r){
                $r["da_lavagna"]="";
                if ($r["id_l_fk"]>0){
                    $r["da_lavagna"]="X";
                }
                $r["href_dettaglio"] = $this->generateUrl('riga_dettaglio', ['id_riga' => $r["id_riga"]]);

                $aLab[]=$r;

        }

        return $this->render('righe/lista_righe.html.twig', [
            'aLab' => $aLab,
        ]);

        
    }



    #[Route('/delete/{id_riga}', name: 'riga_delete', methods: ['GET', 'POST'])]
    public function riga_delete(Request $request, Righe $righe, RigheRepository $righeRepository): Response
    {
        $righeRepository->remove($righe, true);
        

        return new Response(
            1
        );
        
    }



    #[Route('/', name: 'app_righe_index', methods: ['GET'])]
    public function index(RigheRepository $righeRepository): Response
    {
        return $this->render('righe/index.html.twig', [
            'righes' => $righeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_righe_new', methods: ['GET', 'POST'])]
    public function new(Request $request, RigheRepository $righeRepository): Response
    {
        $righe = new Righe();
        
        $form = $this->createFormBuilder($righe)
        ->add('idTestaFk')
        ->add('idlFk')
        ->add('descrizioneAnomalia')
        
        ->add('save', SubmitType::class, ['label' => 'Aggiungi'])
        ->getForm();
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($righe);
            $entityManager->flush();
            
            return $this->redirectToRoute('app_righe_index', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->renderForm('righe/new.html.twig', [
            'title_form' => 'Aggiungi Nuova Riga',
            'righe' => $righe,
            'form' => $form,
            'teste' => "",
            'defaultSelected' => '0'
        ]);
    }
    
    #[Route('/new/{id}', name: 'app_righe_new_for_id_testa', methods: ['GET', 'POST'])]
    public function newForIdTesta(Request $request, RigheRepository $righeRepository, int $id): Response
    {
        $righe = new Righe();
        
        $righe->setIdTestaFk($id);
        
        $form = $this->createFormBuilder($righe)
        ->add('idTestaFk')
        ->add('idlFk')
        ->add('descrizioneAnomalia')
        
        ->add('save', SubmitType::class, ['label' => 'Aggiungi'])
        ->getForm();
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($righe);
            $entityManager->flush();
            
            return $this->redirectToRoute('app_righe_index', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->renderForm('righe/new.html.twig', [
            'title_form' => 'Aggiungi Nuova Riga',
            'righe' => $righe,
            'form' => $form,
            'teste' => "",
            'defaultSelected' => '0'
        ]);
    }
    
    #[Route('/add/anomalia/{anomalia}/{descr_intervento}/{id_meccanico}/{id_t}', name: 'app_righe_new_for_id_testa', methods: ['GET', 'POST'])]
    public function addAnomaia(Request $request, RigheRepository $righeRepository, EntityManagerInterface $entityManager, string $anomalia,string $descr_intervento, int $id_meccanico,  int $id_t): Response
    {
        $righe = new Righe();
        
        $righe->setIdTestaFk($id_t);
        $righe->setDescrizioneAnomalia($anomalia);
        $date = new DateTime();
        $righe->setIdLFk(0);
        $righe->setDataCreazione($date);
        $righe->setDataModifica($date);
        $righe->setIdMeccanico($id_meccanico);
        $righe->setDescrizioneIntervento($descr_intervento);
        $righe->setUtenteCreazione(-1);
        $righe->setIdRReal(0);
        $righe->setStato("TO CONFIRM");
        
        $entityManager->persist($righe);
        $entityManager->flush();
        
        $righe->setIdFk($righe->getId());
        $entityManager->flush();
        $testa =  $entityManager->getRepository(Teste::class)->getTesteForTesteId($id_t);
        
        $listaRighe = $righeRepository->getRigheForTestaWithChild($id_t,$testa[0]->getIdTReal());
        
        
        return $this->renderForm('righe/table.list.righe.html.twig', [
            'righe' => $listaRighe,
        ]);
    }
    
    #[Route('/get/anomalia/{id_t}', name: 'app_righe_get_for_id_testa', methods: ['GET', 'POST'])]
    public function getAnomaliaForTestaId(Request $request, RigheRepository $righeRepository, EntityManagerInterface $entityManager, int $id_t): Response
    {
       
        $listaRighe = null;
        $testeItem = $entityManager->getRepository(Teste::class)->getTesteForTesteId($id_t);
        
        if ($testeItem[0]->getIdTReal() != 0 && $testeItem[0]->getIdTReal() != -1 && $testeItem[0]->getIdTReal() != -2) {
            $listaRighe = $righeRepository->getRigheForTestaWithChild($id_t, $testeItem[0]->getIdTReal());
        } else {
            $listaRighe = $righeRepository->getRigheForTesta($id_t);
        }
        
        return $this->renderForm('righe/table.list.righe.html.twig', [
            'righe' => $listaRighe,
        ]);
    }
    
    #[Route('/add/anomalia/lavagna/{id_l}/{id_t}', name: 'app_add_righe_exist_anomalia_for_id_testa', methods: ['GET', 'POST'])]
    public function addExistingAnomaiaFromLavagna(Request $request, RigheRepository $righeRepository, EntityManagerInterface $entityManager, int $id_l, int $id_t): Response
    {
        $righe = new Righe();
        
        $righe->setIdTestaFk($id_t);
        $righe->setIdLFk($id_l);
        
        $repositoryLavagna = $entityManager->getRepository(Lavagna::class);
        $lavagna = $repositoryLavagna->find($id_l);
        
        
        $righe->setDescrizioneAnomalia($lavagna->getAnomalia());
        $date = new DateTime();
        $righe->setDataCreazione($date);
        $righe->setDataModifica($date);
        $righe->setIdMeccanico(-1);
        $righe->setUtenteCreazione(-1);
        $righe->setIdRReal(0);
        $righe->setStato("OK");
        
        $entityManager->persist($righe);
        $entityManager->flush();
        
        $righe->setIdFk($righe->getId());
        $entityManager->flush();
        $listaRighe = $righeRepository->getRigheForTesta($id_t);
        
        
        return $this->renderForm('righe/table.list.righe.html.twig', [
            'righe' => $listaRighe,
        ]);
    }
    
    #[Route('/confirm/{id_teste}', name: 'app_righe_confirm_add', methods: ['GET'])]
    public function confirmAdd(EntityManagerInterface $entityManager, int $id_teste): Response
    {  
        
        $teste = $entityManager->getRepository(Teste::class)->getTesteForTesteId($id_teste);
        
        $righe = $entityManager->getRepository(Righe::class)->getAllRigheForTestaWithChild($id_teste,$teste[0]->getIdTReal());
        
        foreach ($righe as $riga)  {
            if ($riga->getIdRReal() != 0 && $riga->getIdRReal() != -2) {
                //Confermo quelle in update
                $entityManager->getRepository(Righe::class)->setRReal($riga->getId(), 0);
                
            } else if ($riga->getIdRReal() == -2) { 
                //cancello le orifinali
                $entityManager->getRepository(Righe::class)->deleteRigheForId($riga->getId());                           
            } 
            
           
        }                        
        $entityManager->getRepository(Righe::class)->setStatoToOk();
        return new JsonResponse();
    }
    
   
    #[Route('/{id}', name: 'app_righe_show', methods: ['GET'])]
    public function show(Righe $righe): Response
    {
        return $this->render('righe/show.html.twig', [
            'righe' => $righe,
        ]);
    }

  
    
    #[Route('/{id}/edit', name: 'app_righe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, EntityManagerInterface $entityManager, Righe $righe, RigheRepository $righeRepository): Response
    {
        $righeNew = null;
        if ($righe->getIdRReal() == 0) {
            $righeNew = new Righe();
            $righeNew->setIdRReal(-2);
            //$righeNew->setIdRReal($righe->getId()); // setto a uno che vuol dire = nuova testa da inserire
            $righeNew->setStato("OK");
            $righeNew->setIdLFk($righe->getIdLFk());
            $righeNew->setIdMeccanico($righe->getIdMeccanico());
            $righeNew->setUtenteCreazione($righe->getUtenteCreazione());
            $righeNew->setDescrizioneAnomalia($righe->getDescrizioneAnomalia());
            $righeNew->setDescrizioneIntervento($righe->getDescrizioneIntervento());
            // $dateImmutable = \DateTime::createFromFormat('Y-m-d H:i:s', strtotime('now'));
            $date = new DateTime();
            $righeNew->setDataCreazione($righe->getDataCreazione());
            
           
            $date = new DateTime();
            $righeNew->setDataModifica($date);
            $righeNew->setIdTestaFk($righe->getIdTestaFk());
            
            $entityManager->persist($righeNew);
            $entityManager->flush();
                      
            $righe->setIdRReal($righeNew->getId());
            $righe->setStato("IN PROGRESS");
            $entityManager->flush();
            
        } else {
            $righeNew = $righe;
        }
            
        
       $form = $this->createForm(RigheType::class, $righeNew);
 
       $rigaInProgress = array();
       $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid()) {
                             
            $rigaInProgress = $righeRepository->getRigaForRigaId($righeNew->getId());
            
            $righeRepository->save($rigaInProgress[0], true);  
            
            $entityManager->flush();
            $idTestaFk = $rigaInProgress[0]->getIdTestaFk();
            $testa =  $entityManager->getRepository(Teste::class)->getTesteForTesteId($idTestaFk);
                                  
            return $this->redirectToRoute('app_teste_edit', array('id' => $idTestaFk));                      
        }
        
        return $this->renderForm('righe/edit.html.twig', [
            'righe' => $righe,
                      'form' => $form,
                  ]);
            
//          return $this->renderForm('righe/edit.html.twig', [
//              'righe' => $righeNew,
//              'form' => $form,
//          ]);
        //return new JsonResponse();
    }
    
   

   
    
    #[Route('/delete/{id_testa}/{id_testa_real}', name: 'app_righe_delete_child', methods: ['GET', 'POST'])]
    public function deleteRigheForTestaId(Request $request,RigheRepository  $righeRepository, int $id_testa, int $id_testa_real): Response
    {
        $righeRepository->deleteRigheForTestaId($id_testa,$id_testa_real);
        return new JsonResponse();
    }
    

}
