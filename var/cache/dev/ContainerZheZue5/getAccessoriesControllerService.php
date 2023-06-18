<?php

namespace ContainerZheZue5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccessoriesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AccessoriesController' shared autowired service.
     *
     * @return \App\Controller\AccessoriesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AccessoriesController.php';

        $container->services['App\\Controller\\AccessoriesController'] = $instance = new \App\Controller\AccessoriesController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\AccessoriesController', $container));

        return $instance;
    }
}
