<?php

namespace App\Service;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;



class BasketService
{
    private RequestStack $requestStack;

    private EntityManagerInterface $em;

    public function __construct(RequestStack $requestStack, EntityManagerInterface $em)
    {
        $this->requestStack = $requestStack;
        $this->em = $em;
    }

    // permet d'ajouter un produit au panier

    public function addToBasket(int $id): void
    {
        $basket = $this->getSession()->get('basket', []);
        if (!empty($basket[$id])) {
            $basket[$id]++;
        } else {
            $basket[$id] = 1;
        }
        $this->getSession()->set('basket', $basket);
    }



    // permet de supprimer un produit du panier
    public function removeBasket(int $id)
    {

        $basket = $this->getSession()->get('basket', []);
        unset($basket[$id]);
        return $this->getSession()->set('basket', $basket);
    }

    // permet de diminuer la quantité d'un produit du panier
    public function decrease(int $id)
    {
        $basket = $this->getSession()->get('basket', []);
        if ($basket[$id] > 1) {
            $basket[$id]--;
        } else {
            unset($basket[$id]);
        }
        $this->getSession()->set('basket', $basket);
    }


    // permet de supprimer tous les produits du panier

    public function removeBasketAll()
    {

        return $this->getSession()->remove('basket');
    }

    // permet de récupérer le panier

    public function getTotal(): array
    {
        $basket = $this->getSession()->get('basket');
        $basketData = [];
        if ($basket) {
            foreach ($basket as $id => $quantity) {
                $product = $this->em->getRepository(Product::class)->findOneBy(['id' => $id]);
                if (!$product) {
                    // Supprimer le produit puis continuer en sortant de la boucle
                }
                $basketData[] = [
                    'product' => $product,
                    'quantity' => $quantity
                ];
            }
        }
        return $basketData;
    }

    private function getSession(): SessionInterface
    {
        return $this->requestStack->getSession();
    }
}
