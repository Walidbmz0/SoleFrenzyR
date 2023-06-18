<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\DBAL\Exception\ReadOnlyException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{

    public function __construct(private ReadOnly EntityManagerInterface $em){} 

    #[Route('/product', name: 'product_index')]
    public function index(): Response
    {
        $products = $this->em->getRepository(Product::class)->findAll();
        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }
}
