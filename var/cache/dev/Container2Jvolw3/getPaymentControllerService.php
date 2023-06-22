<?php

namespace Container2Jvolw3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaymentControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PaymentController' shared autowired service.
     *
     * @return \App\Controller\PaymentController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PaymentController.php';

        $container->services['App\\Controller\\PaymentController'] = $instance = new \App\Controller\PaymentController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['router'] ?? $container->getRouterService()));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\PaymentController', $container));

        return $instance;
    }
}
