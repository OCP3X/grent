<?php

namespace ContainerOAYZE2B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LrecfTnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lrecfTn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lrecfTn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'righe' => ['privates', '.errored..service_locator.lrecfTn.App\\Entity\\Righe', NULL, 'Cannot autowire service ".service_locator.lrecfTn": it needs an instance of "App\\Entity\\Righe" but this type has been excluded in "config/services.yaml".'],
        ], [
            'righe' => 'App\\Entity\\Righe',
        ]);
    }
}
