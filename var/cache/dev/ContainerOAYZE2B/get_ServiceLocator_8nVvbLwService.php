<?php

namespace ContainerOAYZE2B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8nVvbLwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8nVvbLw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8nVvbLw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'documenti' => ['privates', '.errored..service_locator.8nVvbLw.App\\Entity\\Documenti', NULL, 'Cannot autowire service ".service_locator.8nVvbLw": it needs an instance of "App\\Entity\\Documenti" but this type has been excluded in "config/services.yaml".'],
        ], [
            'documenti' => 'App\\Entity\\Documenti',
        ]);
    }
}
