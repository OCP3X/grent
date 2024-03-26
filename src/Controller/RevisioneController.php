<?php

namespace App\Controller;

use App\Entity\VeicoliInfo;
use App\Entity\Revisione;
use App\Form\RevisioneType;
use App\Repository\RevisioneRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/revisione')]
class RevisioneController extends AbstractController
{
    #[Route('/', name: 'app_revisione_index', methods: ['GET'])]
    public function index(RevisioneRepository $revisioneRepository): Response
    {
        return $this->render('revisione/index.html.twig', [
            'revisiones' => $revisioneRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_revisione_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $revisione = new Revisione();
        $form = $this->createForm(RevisioneType::class, $revisione);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($revisione);
            $entityManager->flush();

            return $this->redirectToRoute('app_revisione_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('revisione/new.html.twig', [
            'revisione' => $revisione,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_revisione_show', methods: ['GET'])]
    public function show(Revisione $revisione): Response
    {
        return $this->render('revisione/show.html.twig', [
            'revisione' => $revisione,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_revisione_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Revisione $revisione, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RevisioneType::class, $revisione);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_revisione_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('revisione/edit.html.twig', [
            'revisione' => $revisione,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_revisione_delete', methods: ['POST'])]
    public function delete(Request $request, Revisione $revisione, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$revisione->getId(), $request->request->get('_token'))) {
            $entityManager->remove($revisione);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_revisione_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/list/revisione', name: 'app_revisione_list', methods: ['GET'])]
    public function findAnomalia(Request $request, EntityManagerInterface $entityManager): Response
    {
        
        $repositoryVeicoliInfo = $entityManager->getRepository(Revisione::class);
        $data = $repositoryVeicoliInfo->list();
        
        return new JsonResponse($data);
    }

    #[Route('/notifica/revisione', name: 'app_revisione_notifica', methods: ['GET'])]
    public function findnotifica(Request $request, EntityManagerInterface $entityManager): Response
    {
        
        $repositoryVeicoliInfo = $entityManager->getRepository(Revisione::class);
        $data = $repositoryVeicoliInfo->notifica();
        
        return new JsonResponse($data);
    }


    #[Route('/aggiorna_edit/', name: 'app_revisione_aggiorna_edit', methods: ['POST'])]
    public function aggiorna_edit(Request $request, EntityManagerInterface $entityManager): Response
    {
        $data = json_decode($request->getContent(), true);
    
        $targa = $data['targa'];
        $value = $data['value'];
        $tipo = $data['tipo'];
    
        $veicoloExistente = $entityManager->getRepository(VeicoliInfo::class)->findOneBy(['targa' => $targa]);
    
        if (!$veicoloExistente) {
            return new JsonResponse(['error' => 'Veicolo non trovato'], Response::HTTP_NOT_FOUND);
        }
    
        // Utiliza '===' en lugar de '=' para comparaciones
        if ($tipo === 'collaudo') {
            $veicoloExistente->setCollaudo(new \DateTime($value));
            //pross
            $veicoloExistente->setCollaudo_pross(new \DateTime($value));            
            $collaudoProssImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getCollaudo_pross());
            $collaudoProssModified = $collaudoProssImmutable->add(new \DateInterval('P1Y'));           
            $veicoloExistente->setCollaudo_pross(\DateTime::createFromImmutable($collaudoProssModified));
            //alert
            $veicoloExistente->setCollaudo_alert(new \DateTime($value));            
            $collaudoAlertImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getCollaudo_alert());
            $collaudoAlertModified = $collaudoAlertImmutable->add(new \DateInterval('P11M'));           
            $veicoloExistente->setCollaudo_alert(\DateTime::createFromImmutable($collaudoAlertModified));


        } elseif ($tipo === 'tachigrafi') {
            $veicoloExistente->setTachigrafi(new \DateTime($value));
            //pross
            $veicoloExistente->setTachigrafi_pross(new \DateTime($value));            
            $tachigrafiProssImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getTachigrafi_pross());
            $tachigrafiProssModified = $tachigrafiProssImmutable->add(new \DateInterval('P2Y'));           
            $veicoloExistente->setTachigrafi_pross(\DateTime::createFromImmutable($tachigrafiProssModified));
            //alert
            $veicoloExistente->setTachigrafi_alert(new \DateTime($value));            
            $tachigrafiAlertImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getTachigrafi_alert());
            $tachigrafiAlertModified = $tachigrafiAlertImmutable->add(new \DateInterval('P1Y11M'));           
            $veicoloExistente->setTachigrafi_alert(\DateTime::createFromImmutable($tachigrafiAlertModified));
        } elseif ($tipo === 'estintori') {
            $veicoloExistente->setEstintori(new \DateTime($value));
            //pross
            $veicoloExistente->setEstintori_pross(new \DateTime($value));           
            $estintoriProssImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getEstintori_pross());
            $estintoriProssModified = $estintoriProssImmutable->add(new \DateInterval('P6M'));            
            $veicoloExistente->setEstintori_pross(\DateTime::createFromImmutable($estintoriProssModified));
            //alert
            $veicoloExistente->setEstintori_alert(new \DateTime($value));           
             $estintoriAlertImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getEstintori_alert());
             $estintoriAlertModified = $estintoriAlertImmutable->add(new \DateInterval('P5M'));            
             $veicoloExistente->setEstintori_alert(\DateTime::createFromImmutable($estintoriAlertModified));
        } elseif ($tipo === 'casetta_ps') {
            $veicoloExistente->setCasetta_ps(new \DateTime($value));
            //pross
            $veicoloExistente->setCasetta_ps_pross(new \DateTime($value));            
             $casetta_psProssImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getCasetta_ps_pross());
             $casetta_psProssModified = $casetta_psProssImmutable->add(new \DateInterval('P1Y'));           
             $veicoloExistente->setCasetta_ps_pross(\DateTime::createFromImmutable($casetta_psProssModified));
             //alert
             $veicoloExistente->setCasetta_ps_alert(new \DateTime($value));            
              $casetta_psAlertImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getCasetta_ps_alert());
              $casetta_psAlertModified = $casetta_psAlertImmutable->add(new \DateInterval('P11M'));           
              $veicoloExistente->setCasetta_ps_alert(\DateTime::createFromImmutable($casetta_psAlertModified)); 
        } elseif ($tipo === 'sistema_ap') {
            $veicoloExistente->setSistema_ap(new \DateTime($value));
            //pross
            $veicoloExistente->setSistema_ap_pross(new \DateTime($value));            
             $sistema_apProssImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getSistema_ap_pross());
             $sistema_apProssModified = $sistema_apProssImmutable->add(new \DateInterval('P1Y'));           
             $veicoloExistente->setSistema_ap_pross(\DateTime::createFromImmutable($sistema_apProssModified));
             //alert
             $veicoloExistente->setSistema_ap_alert(new \DateTime($value));            
             $sistema_apAlertImmutable = \DateTimeImmutable::createFromMutable($veicoloExistente->getSistema_ap_alert());
             $sistema_apAlertModified = $sistema_apAlertImmutable->add(new \DateInterval('P11M'));           
             $veicoloExistente->setSistema_ap_alert(\DateTime::createFromImmutable($sistema_apAlertModified));
        } else {
            return new JsonResponse(['error' => 'Tipo non valido'], Response::HTTP_BAD_REQUEST);
        }
    
        $entityManager->flush();
    
        return new JsonResponse(['message' => 'Fatto', 'data' => $data], Response::HTTP_OK);
    }



}
