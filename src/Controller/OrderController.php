<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\RecapDetails;
use App\Form\OrderType;
use App\Service\BasketService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderController extends AbstractController
{
    private EntityManagerInterface $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    // permet de créer une commande
    #[Route('/order/create', name: 'order_index')]
    public function index(BasketService $basketService): Response
    {
        if($this->getUser() == null){
            return $this->redirectToRoute('app_login');
        }
        

        // on crée un formulaire de commande

        $form = $this->createForm(OrderType::class, null, [
            'user' => $this->getUser()
        ]); 

        return $this->render('order/index.html.twig', [
            'form' => $form->createView(),
            'recapBasket' => $basketService->getTotal(),
        ]);
    }

    // permet de valider une commande

    #[Route('/order/verify', name: 'order_prepare', methods: ['POST'])]
    public function prepareOrder(BasketService $basketService, Request $request): Response
    {
        if($this->getUser() == null){
            return $this->redirectToRoute('app_login');
        }
        $form = $this->createForm(OrderType::class, null, [
            'user' => $this->getUser()
        ]);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $datetime = new \DateTime('now');
            $transporter = $form->get('transporter')->getData();
            $deliveryinfo = $form->get('addresses')->getData();
            $deliveryForOrder = $deliveryinfo->getFirstName() . ' ' . $deliveryinfo->getLastName();
            $deliveryForOrder .= '<br/>' . $deliveryinfo->getPhone(); 
            if($deliveryinfo->getCompany() != null){
                $deliveryForOrder .= '<br/>' . $deliveryinfo->getCompany();
            }
            $deliveryForOrder .= '<br/>' . $deliveryinfo->getAddress();
            $deliveryForOrder .= '<br/>' . $deliveryinfo->getPostalCode() . ' ' . $deliveryinfo->getCity();
            $deliveryForOrder .= '<br/>' . $deliveryinfo->getCountry();
            $order = new Order();
            $reference = $datetime->format('dmY').'-'.uniqid();
            $order->setUsers($this->getUser());
            $order->setReference($reference);
            $order->setOrderDate($datetime);
            $order->setDeliveryInfo($deliveryForOrder);
            $order->setDeliveryInfo($deliveryinfo->getTitle());
            $order->setDeliveryPrice($transporter->getPrice());
            $order->setIsPaid(0);
            $order->setMethod('stripe');
            
            $this->em->persist($order);

            foreach($basketService->getTotal() as $product){
                $recapDetails = new RecapDetails();
                $recapDetails->setOrderProduct($order);
                $recapDetails->setQuantity($product['quantity']);
                $recapDetails->setPrice($product['product']->getPrice());  
                $recapDetails->setProduct($product['product']->getName());
                $recapDetails->setTotalRecap(
                $product['product']->getPrice() * $product['quantity']);

                $this->em->persist($recapDetails);
                  
            }
            
            $this->em->flush();

            return $this ->render('order/recap.html.twig', [
                'method' => $order->getMethod(),
                'recapBasket' => $basketService->getTotal(),
                'transporter' => $transporter,
                'deliveryinfo' => $deliveryForOrder,
                'reference' => $order->getReference()

            ]);

        }
       
        return $this->redirectToRoute('basket_index');
    }
    
    
    
   
}



