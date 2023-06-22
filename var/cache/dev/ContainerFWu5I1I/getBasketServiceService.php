<?php

namespace ContainerFWu5I1I;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBasketServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\BasketService' shared autowired service.
     *
     * @return \App\Service\BasketService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/BasketService.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['App\\Service\\BasketService'])) {
            return $container->privates['App\\Service\\BasketService'];
        }

        return $container->privates['App\\Service\\BasketService'] = new \App\Service\BasketService(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $a);
    }
}
