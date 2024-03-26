<?php

namespace App\Controller;

use App\Entity\Documenti;
use App\Form\DocumentiType;
use App\Repository\DocumentiRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/documenti')]
class DocumentiController extends AbstractController
{
    #[Route('/', name: 'app_documenti_index', methods: ['GET'])]
    public function index(DocumentiRepository $documentiRepository): Response
    {
        return $this->render('documenti/index.html.twig', [
            'documentis' => $documentiRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_documenti_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $documenti = new Documenti();
        $form = $this->createForm(DocumentiType::class, $documenti);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($documenti);
            $entityManager->flush();

            return $this->redirectToRoute('app_documenti_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('documenti/new.html.twig', [
            'documenti' => $documenti,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_documenti_show', methods: ['GET'])]
    public function show(Documenti $documenti): Response
    {
        return $this->render('documenti/show.html.twig', [
            'documenti' => $documenti,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_documenti_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Documenti $documenti, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DocumentiType::class, $documenti);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_documenti_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('documenti/edit.html.twig', [
            'documenti' => $documenti,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_documenti_delete', methods: ['POST'])]
    public function delete(Request $request, Documenti $documenti, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$documenti->getId(), $request->request->get('_token'))) {
            $entityManager->remove($documenti);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_documenti_index', [], Response::HTTP_SEE_OTHER);
    }
}
