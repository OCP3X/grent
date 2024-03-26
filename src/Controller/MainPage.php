<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\rpx;

class MainPage extends AbstractController
{

    #[Route('/', name: 'officina_index')]
    public function index(): Response
    {


        //$hasAccess = $this->isGranted('ROLE_USER');

        //dd($hasAccess);
        //$this->denyAccessUnlessGranted('ROLE_USER');
        //$user = $this->getUser();

        

        return $this->render('MainPage/mainpage.html.twig', [
            
        ]);


    }

    #[Route('/upgrade_db', name: 'upgrade_db')]
    public function upgrade_dn(rpx $rpx): Response
    {
       
       $ret = $rpx->upgrade_db();
       return $this->render('MainPage/upgrade_db.html.twig', [
            "messaggio"=>$ret,
        ]);


    }

    #[Route('/logout', name: 'logout_app')]
    public function logout_app(rpx $rpx): Response
    {
       
       $ret = $rpx->logout();
       return $this->render('MainPage/mainpage.html.twig', [
            "messaggio"=>$ret,
        ]);


    }


}