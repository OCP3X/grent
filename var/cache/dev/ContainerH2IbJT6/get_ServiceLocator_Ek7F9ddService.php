<?php

namespace ContainerH2IbJT6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ek7F9ddService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ek7F9dd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ek7F9dd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'righe' => ['privates', '.errored..service_locator.ek7F9dd.App\\Entity\\Righe', NULL, 'Cannot autowire service ".service_locator.ek7F9dd": it needs an instance of "App\\Entity\\Righe" but this type has been excluded in "config/services.yaml".'],
            'righeRepository' => ['privates', 'App\\Repository\\RigheRepository', 'getRigheRepositoryService', true],
        ], [
            'righe' => 'App\\Entity\\Righe',
            'righeRepository' => 'App\\Repository\\RigheRepository',
        ]);
    }
}