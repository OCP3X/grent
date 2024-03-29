<?php

namespace ContainerOAYZE2B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZAKoFVbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zAKoFVb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zAKoFVb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'revisione' => ['privates', '.errored..service_locator.zAKoFVb.App\\Entity\\Revisione', NULL, 'Cannot autowire service ".service_locator.zAKoFVb": it needs an instance of "App\\Entity\\Revisione" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'revisione' => 'App\\Entity\\Revisione',
        ]);
    }
}
