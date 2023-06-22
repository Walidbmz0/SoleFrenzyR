<?php

namespace Container2Jvolw3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C89Mcm4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.C89Mcm4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.C89Mcm4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'service' => ['privates', 'App\\Service\\BasketService', 'getBasketServiceService', true],
        ], [
            'service' => 'App\\Service\\BasketService',
        ]);
    }
}