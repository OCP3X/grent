<?php

namespace ContainerSyxcmW3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStartControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\StartController' shared autowired service.
     *
     * @return \App\Controller\StartController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\StartController'] = $instance = new \App\Controller\StartController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\StartController', $container));

        return $instance;
    }
}