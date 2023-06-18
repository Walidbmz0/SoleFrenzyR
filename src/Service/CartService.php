<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\Product;



class CartService
{

    private RequestStack $requestStack;
    private EntityManagerInterface $em;
    public function __construct(RequestStack $requestStack, EntityManagerInterface $em)
    {
        $this->requestStack = $requestStack;
        $this->em = $em;
    }

    public function addToCart(int $id): void
    {
        $card = $this->requestStack->getSession()->get('cart', []);
        if (!empty($card[$id])) {
            $card[$id]++;
        } else {
            $card[$id] = 1;
        }
        $this->getSession()->set('cart', $card);
    }

    public function getTotal(): array
    {
        $cart = $this->getSession()->get('cart');
        $cartData = [];
        foreach ($cart as $id => $quantity) {
            $product = $this->em->getRepository(Product::class)->findOneBy(['id' => $id]);
            if (!$product) {
                //Supprimer le produit en sortant de la boucle


            }
            $cartData[] = [
                'product' => $product,
                'quantity' => '$quantity'


            ];
        }
        return $cartData;
    }



    private function getSession(): SessionInterface
    {
        return $this->requestStack->getSession();
    }
}
