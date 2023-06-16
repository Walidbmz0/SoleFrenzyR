<?php

namespace Container6mi54yk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBrandCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\BrandCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\BrandCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/BrandCrudController.php';

        $container->services['App\\Controller\\Admin\\BrandCrudController'] = $instance = new \App\Controller\Admin\BrandCrudController();

        $instance->setContainer(($container->privates['.service_locator.GymbEAg'] ?? $container->load('get_ServiceLocator_GymbEAgService'))->withContext('App\\Controller\\Admin\\BrandCrudController', $container));

        return $instance;
    }
}
