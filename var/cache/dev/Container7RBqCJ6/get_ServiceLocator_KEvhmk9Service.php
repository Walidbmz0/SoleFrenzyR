<?php

namespace Container7RBqCJ6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KEvhmk9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kEvhmk9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kEvhmk9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'context' => ['privates', '.errored..service_locator.kEvhmk9.EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext', NULL, 'Cannot autowire service ".service_locator.kEvhmk9": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext" but no such service exists.'],
        ], [
            'context' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext',
        ]);
    }
}
