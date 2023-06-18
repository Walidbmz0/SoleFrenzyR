<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShoesController extends AbstractController
{
    #[Route('/shoes', name: 'app_shoes')]
    public function index(): Response
    {
        return $this->render('shoes/index.html.twig', [
            'controller_name' => 'ShoesController',
        ]);
    }
}
