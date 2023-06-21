<?php

namespace App\Controller;

use App\Entity\Product;
use App\Service\BasketService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BasketController extends AbstractController
{

    // permet d'afficher le panier

    #[Route('/mon-panier', name: 'basket_index')]
    public function index(BasketService $basketService): Response
    {   
        
        return $this->render('basket/index.html.twig',[
                
                'basket' => $basketService->getTotal()
        ]);
    }

    // permet d'ajouter un produit au panier

    #[Route('/mon-panier/add/{id<\d+>}', name: 'basket_add')]
    public function addToBasket(BasketService $basketService, int $id): Response
    {
        $basketService->addToBasket($id);

        return $this->redirectToRoute('basket_index');
    }


    // permet de supprimer un produit du panier

    #[Route('/mon-panier/remove/{id<\d+>}', name: 'basket_remove')]
    public function removeBasket(BasketService $basketService, int $id): Response
    {
        $basketService->removeBasket($id);

        return $this->redirectToRoute('basket_index');
    }

    // permet de diminuer la quantité d'un produit du panier
    #[Route('/mon-panier/decrease/{id<\d+>}', name: 'basket_decrease')]
    public function decrease(BasketService $basketService, int $id): RedirectResponse
    {
        $basketService->decrease($id);

        return $this->redirectToRoute('basket_index');
    }


    // permet de supprimer tous les produits du panier

    #[Route('/mon-panier/removeAll', name: 'basket_removeAll')]
    public function removeBasketAll(BasketService $basketService): Response
    {
        $basketService->removeBasketAll();

        return $this->redirectToRoute('product_index');
    }
}
   