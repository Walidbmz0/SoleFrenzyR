<?php

namespace ContainerOgMx3FE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Nw8J916Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nw8J916' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nw8J916'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'basketService' => ['privates', 'App\\Service\\BasketService', 'getBasketServiceService', true],
        ], [
            'basketService' => 'App\\Service\\BasketService',
        ]);
    }
}
