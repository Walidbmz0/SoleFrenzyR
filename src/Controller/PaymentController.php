<?php

namespace App\Controller;

use Stripe\Stripe;
use App\Entity\Order;
use App\Entity\Product;
use Stripe\Checkout\Session;
use App\Service\BasketService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PaymentController extends AbstractController
{
    private EntityManagerInterface $em;
    private UrlGeneratorInterface $generator;

    public function __construct(EntityManagerInterface $em, UrlGeneratorInterface $generator)
    {
        $this->em = $em;
        $this->generator = $generator;
    }

    #[Route('/order/create-session-stripe/{reference}', name: 'payment_stripe')]
    public function stripeCheckout($reference): RedirectResponse
    {
        $productStripe = [];
        $order = $this->em->getRepository(Order::class)->findOneBy(['reference' => $reference]);

        if (!$order) {
            return $this->redirectToRoute('basket_index');
        }

        foreach ($order->getRecapDetails()->getValues() as $product) {
            $productData = $this->em->getRepository(Product::class)->findOneBy(['Name' => $product->getProduct()]);
            $productStripe[] = [
                'price_data' => [
                    'currency' => 'eur',
                    'unit_amount' => $productData->getPrice(),
                    'product_data' => [
                        'name' => $product->getProduct(),
                    ]

                ],
                'quantity' => $product->getQuantity(),

            ];
            
        }

        $productStripe[] = [
            'price_data' => [
                'currency' => 'eur',
                'unit_amount' => $order->getDeliveryPrice(),
                'product_data' => [
                    'name' => $order->getDeliveryInfo(),
                ]

            ],
            'quantity' => 1,

        ];
        
           

        Stripe::setApiKey('sk_test_51M9VepFi2wz83XopTC8Br4hvXoJc4q6VrUJwbgcVJFhZtv8i8caNKF0BsLRf3Tc9tFjU5aB8v2Hj2koP7ezEFUV3004Fvy8wYP');

        $checkout_session = Session::create([
            'customer_email' => $this->getUser()->getEmail(),
            'payment_method_types' => ['card'],
            'line_items' => [[
                $productStripe,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generator->generate('payment_success',[
                'reference' => $order->getReference()
            ], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generator->generate('payment_error',[
                'reference' => $order->getReference()
            ], UrlGeneratorInterface::ABSOLUTE_URL)
        ]);

        return new RedirectResponse($checkout_session->url);
    }

    #[Route('/order/success/{reference}', name: 'payment_success')]
    public function StripeSuccess($reference, BasketService $service): Response
    {
        return $this->render('order/success.html.twig');
    }

    #[Route('/order/error/{reference}', name: 'payment_error')]
    public function StripError($reference, BasketService $service): Response
    {
        return $this->render('order/error.html.twig');
    }

}
