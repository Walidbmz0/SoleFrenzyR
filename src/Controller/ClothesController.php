<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClothesController extends AbstractController
{
    #[Route('/clothes', name: 'app_clothes')]
    public function index(): Response
    {
        return $this->render('clothes/index.html.twig', [
            'controller_name' => 'ClothesController',
        ]);
    }
}
