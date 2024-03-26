<?php

namespace App\Controller;

use App\Entity\Lavagna;
use App\Entity\Veicoli;
use App\Form\LavagnaType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Http\Attribute\IsGranted;



#[IsGranted('ROLE_USER')]
#[Route('/lavagna')]
//#[IsGranted('ROLE_USER')]
class LavagnaController extends AbstractController
{
    #[Route('/', name: 'app_lavagna_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $anomalie = $entityManager
            ->getRepository(Lavagna::class)
            ->getAnomaliaJoinVeicoli();

        $someArray = [];
            
        foreach ($anomalie as $anomaliaItem) {
            array_push($someArray, [
                'veicolo'    =>  $anomaliaItem['id_veicolo'],
                'anomalia'   =>  $anomaliaItem['anomalia'],
                'targa'      =>  $anomaliaItem['targa'],
                'descrizion' =>  $anomaliaItem['descrizion'],
                'idL'        =>  $anomaliaItem['id_l'],
                'data_lavagna' =>  $anomaliaItem['data_lavagna'],
            ]);
        }
            
           
        return $this->render('lavagna/index.html.twig', [
            'anomalie' => $someArray,
        ]);
    }

    #[Route('/new', name: 'app_lavagna_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $lavagna = new Lavagna();
        
        $form = $this->createFormBuilder($lavagna)
        ->add('idVeicolo', TextType::class, [
            'label' => 'Id Veicolo',
        ])
         ->add('data_lavagna', DateType::class, [ 
            'label' => 'Data',
            'widget' => 'single_text',
            'html5' => false,
            'attr' => ['class' => 'js-datepicker'],
            'format' => 'dd/MM/yyyy',
            ])
        ->add('anomalia')
        ->getForm();
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->getRepository(Lavagna::class)->save($lavagna,true);
            //$entityManager->persist($lavagna);
            //$entityManager->flush();

            return $this->redirectToRoute('app_lavagna_index', [], Response::HTTP_SEE_OTHER);
        }

        $href_lavagna_index = $this->generateUrl('app_lavagna_index');


        return $this->renderForm('lavagna/new.html.twig', [
            'title_form' => 'Aggiungi Nuova Anomalia*',
            'lavagna' => $lavagna,
            'form' => $form,
            'veicoli' => "",
            'targa' => "",
            'href_lavagna_index' => $href_lavagna_index,
            'defaultSelected' => $lavagna->getIdVeicolo()
        ]);
    }

    #[Route('/{idL}', name: 'app_lavagna_show', methods: ['GET'])]
    public function show(Lavagna $lavagna): Response
    {
        return $this->render('lavagna/show.html.twig', [
            'lavagna' => $lavagna,
        ]);
    }

    #[Route('/{idL}/edit', name: 'app_lavagna_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Lavagna $lavagna, EntityManagerInterface $entityManager): Response
    {
         $veicolo = $entityManager
        ->getRepository(Veicoli::class)
        ->getVeicoloDescriptionByIdVeicolo($lavagna->getIdVeicolo());
        
        $form = $this->createFormBuilder($lavagna)
        ->add('idVeicolo', TextType::class,[
            'data'     => $lavagna->getIdVeicolo()
        ])
        ->add('anomalia',TextType::class,[
            'data'     => $lavagna->getAnomalia(),
        ])
        ->add('data_lavagna', DateType::class, [ 
            'label' => 'Data',
            'widget' => 'single_text',
            'html5' => false,
            'attr' => ['class' => 'js-datepicker','autocomplete' => 'off'],
            'format' => 'dd/MM/yyyy',
            ])
        ->getForm();
            
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            //$entityManager->flush();
            $entityManager->getRepository(Lavagna::class)->save($lavagna,true);

            return $this->redirectToRoute('app_lavagna_index', [], Response::HTTP_SEE_OTHER);
        }
        $href_lavagna_index = $this->generateUrl('app_lavagna_index');
        return $this->renderForm('lavagna/new.html.twig', [
            'title_form' => 'Modifica Anomalia',
            'lavagna' => $lavagna,
            'form' => $form,
            'href_lavagna_index' => $href_lavagna_index,
            'defaultSelected' => $lavagna->getIdVeicolo()
        ]);
    }
    
    #[Route('/{idL}/duplicate', name: 'app_lavagna_duplicate', methods: ['GET', 'POST'])]
    public function duplicate(Request $request, Lavagna $lavagna, EntityManagerInterface $entityManager): Response
    {
        $newLavagna = new Lavagna();
        $newLavagna->setIdVeicolo($lavagna->getIdVeicolo());
        $newLavagna->setAnomalia($lavagna->getAnomalia());
        $newLavagna->setDataLavagna($lavagna->getDataLavagna());
        
        $veicolo = $entityManager
        ->getRepository(Veicoli::class)
        ->getVeicoloDescriptionByIdVeicolo($newLavagna->getIdVeicolo());
        
        $form = $this->createFormBuilder($newLavagna)
        ->add('idVeicolo', TextType::class,[
            'attr'=> [ 'readonly' => true ]
        ])
        ->add('anomalia',TextType::class,[
            'data'     => $lavagna->getAnomalia(),
        ])
        ->add('data_lavagna', DateType::class, [ 
            'label' => 'Data',
            'widget' => 'single_text',
            'html5' => false,
            'attr' => ['class' => 'js-datepicker'],
            'format' => 'dd/MM/yyyy',
            ])
        ->getForm();
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($newLavagna);
            $entityManager->flush();
            
            return $this->redirectToRoute('app_lavagna_index', [], Response::HTTP_SEE_OTHER);
        }

        $href_lavagna_index = $this->generateUrl('app_lavagna_index');
        
        return $this->renderForm('lavagna/new.html.twig', [
            'title_form' => 'Duplica Anomalia',
            'lavagna' => $newLavagna,
            'form' => $form,
            'veicoli' => $veicolo[0]->getDescrizion(),
            'targa' => $veicolo[0]->getTarga(),
            'href_lavagna_index' => $href_lavagna_index,
            'defaultSelected' => $newLavagna->getIdVeicolo()
        ]);
    }

    #[Route('/{idL}', name: 'app_lavagna_delete', methods: ['POST'])]
    public function delete(Request $request, Lavagna $lavagna, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($lavagna);
        $entityManager->flush();

        return $this->redirectToRoute('app_lavagna_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/delete/{idL}', name: 'app_lavagna_delete_form_less', methods: ['GET'])]
    public function deleteFormLess(Request $request, Lavagna $lavagna, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($lavagna);
        $entityManager->flush();

        return $this->redirectToRoute('app_lavagna_index', [], Response::HTTP_SEE_OTHER);
    }
    
    
    #[Route('/veicoli/{descrizion}', name: 'app_lavagna_get_veicoli', methods: ['GET'])]
    public function getVeicoli(Request $request, EntityManagerInterface $entityManager, string $descrizion): Response
    {
        $repositoryVeicoli = $entityManager->getRepository(Veicoli::class);

        $veicoli = $repositoryVeicoli->getVeicoloDescription($descrizion);
        $someArray = [];
        
        foreach ($veicoli as $veicolo ) {
              array_push($someArray, [
                  'descrizione' => trim($veicolo->getdescrizion()),
                  'idveicolo'   =>$veicolo->getidveicolo()
              ]);   
        }
        return new JsonResponse($someArray);
    }
    
    #[Route('/{idL}/veicoli/{descrizion}', name: 'app_lavagna_get_veicoli_for_edit', methods: ['GET'])]
    public function getVeicoliForEdit(Request $request, EntityManagerInterface $entityManager, Lavagna $lavagna, string $descrizion): Response
    {
        return $this->getVeicoli($request, $entityManager, $descrizion);
    }
    
    
    #[Route('/find/anomalia/{anomalia}/{descrizione}/{targa}', name: 'app_lavagna_find_anomalia', methods: ['GET'])]
    public function findAnomalia(Request $request, EntityManagerInterface $entityManager, string $anomalia, string $descrizione, string $targa): Response
    {
        
        $repositoryLavagna = $entityManager->getRepository(Lavagna::class);
        $anomalie = $repositoryLavagna->findAnomaliaJoinVeicoli($anomalia, $descrizione, $targa);
        return $this->createHtmlTBody($anomalie);
    }
    

    
    #[Route('/lista/anomalia', name: 'app_lavagna_get_list_anomalia', methods: ['GET', 'POST'])]
    public function getListAnomalia(EntityManagerInterface $entityManager): Response
    {
        $repositoryLavagna = $entityManager->getRepository(Lavagna::class);
        $anomalie = $repositoryLavagna->getAnomaliaJoinVeicoli();
        return $this->createHtmlTBody($anomalie);
    }
    
    public function createHtmlTBody(array $list): Response
    {
        return $this->renderForm('lavagna/table.list.index.html.twig', [
            'anomalie' => $list,
        ]);
    }
    
    #[Route('/get/table', name: 'app_lavagna_get_table_for_find_anomalie', methods: ['GET'])]
    public function getTableForFindAnomalie(Request $request, EntityManagerInterface $entityManager): Response
    {
        return $this->renderForm('lavagna/div.for.table.html.twig');
    }
    
    #[Route('/find/anomalie/veicoli/{idVeicolo}/', name: 'app_lavagna_find_anomalia_by_id_veicoli', methods: ['GET'])]
    public function findAnomaliaByIdVeicoli(Request $request, EntityManagerInterface $entityManager,  int $idVeicolo): Response
    {
        $repositoryLavagna = $entityManager->getRepository(Lavagna::class);
        $anomalie = $repositoryLavagna->getAnomaliaForIdVeicolo($idVeicolo);
        return $this->renderForm('lavagna/table.list.anomalie.html.twig', ['anomalie' => $anomalie]);
    }
    
  
}
