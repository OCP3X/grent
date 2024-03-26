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

#[Route('/start')]
class StartController extends AbstractController
{
    #[Route('/', name: 'app_start_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('start/show.html.twig', []);
    }

   
}
