<?php

namespace App\Controller;

use App\Entity\Veicoli;
use App\Form\VeicoliType;
use App\Repository\VeicoliRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/veicoli')]
class VeicoliController extends AbstractController
{
    #[Route('/', name: 'app_veicoli_index', methods: ['GET'])]
    public function index(VeicoliRepository $veicoliRepository): Response
    {
        return $this->render('veicoli/index.html.twig', [
            'veicolis' => $veicoliRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_veicoli_new', methods: ['GET', 'POST'])]
    public function new(Request $request, VeicoliRepository $veicoliRepository): Response
    {
        $veicoli = new Veicoli();
        $form = $this->createForm(VeicoliType::class, $veicoli);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $veicoliRepository->save($veicoli, true);

            return $this->redirectToRoute('app_veicoli_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('veicoli/new.html.twig', [
            'veicoli' => $veicoli,
            'form' => $form,
        ]);
    }

    #[Route('/{idVeicolo}', name: 'app_veicoli_show', methods: ['GET'])]
    public function show(Veicoli $veicoli): Response
    {
        return $this->render('veicoli/show.html.twig', [
            'veicoli' => $veicoli,
        ]);
    }
    
    

    #[Route('/{idVeicolo}/edit', name: 'app_veicoli_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Veicoli $veicoli, VeicoliRepository $veicoliRepository): Response
    {
        $form = $this->createForm(VeicoliType::class, $veicoli);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $veicoliRepository->save($veicoli, true);

            return $this->redirectToRoute('app_veicoli_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('veicoli/edit.html.twig', [
            'veicoli' => $veicoli,
            'form' => $form,
        ]);
    }

    #[Route('/{idVeicolo}', name: 'app_veicoli_delete', methods: ['POST'])]
    public function delete(Request $request, Veicoli $veicoli, VeicoliRepository $veicoliRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$veicoli->getIdVeicolo(), $request->request->get('_token'))) {
            $veicoliRepository->remove($veicoli, true);
        }

        return $this->redirectToRoute('app_veicoli_index', [], Response::HTTP_SEE_OTHER);
    }
    
    #[Route('/find/{idveicolo}', name: 'app_veicoli_find_by_id', methods: ['GET'])]
    public function findVeicoloById(Request $request, EntityManagerInterface $entityManager, int $idveicolo): Response
    {
        $veicoli = $entityManager
        ->getRepository(Veicoli::class)
        ->getVeicoloDescriptionByIdVeicolo($idveicolo);
        
        $aLab = array();
        foreach ($veicoli as $veicolo ) {
            $aLab["descrizione"]=$veicolo->getdescrizion();
            $aLab["targa"]=$veicolo->gettarga();
            $aLab["numparco"]=$veicolo->getNumParco();
            $aLab["id_veicolo"]=$idveicolo;
        }
        
        return new JsonResponse($aLab);
    }
    
    #[Route('/find/all/{descrizione}/{targa}', name: 'app_veicoli_find_by_descr_targa', methods: ['GET'])]
    public function findVeicoloByDescrizioneAndTarga(Request $request, EntityManagerInterface $em, string $descrizione, string $targa): Response
    {
        $repositoryVeicoli = $em->getRepository(Veicoli::class);
        $veicoli = $repositoryVeicoli->getVeicoloByDescriptionAndTarga($descrizione, $targa);
        return $this->createHtmlTBody($veicoli);
    }
    
    #[Route('/get/table', name: 'app_veicoli_get_table_for_find_veicolo', methods: ['GET'])]
    public function getTableForFindVeicolo(Request $request, EntityManagerInterface $entityManager): Response
    {
        return $this->renderForm('veicoli/div.for.table.html.twig');
    }
    
    public function createHtmlTBody(array $list): Response
    {
        return $this->renderForm('veicoli/table.list.veicoli.html.twig', [
            'veicoli' => $list,
        ]);
        
    }
}
