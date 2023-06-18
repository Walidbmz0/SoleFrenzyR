<?php

namespace App\Controller;

use App\Entity\Product;
use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CartController extends AbstractController
{
    #[Route('/mon-panier', name: 'cart_index')]
    public function index(CartService $cartService): Response
    {
        dd($cartService->getTotal());
        return $this->render('cart/index.html.twig');
        
    }


    #[Route('/mon-panier/add/{id<\d+>} ', name: 'cart_add')]
    public function addToRoute(CartService $cartService, int $id): Response
    {
        $cartService->addToCart($id);
        return $this->redirectToRoute('cart_index');
        
    }
}
