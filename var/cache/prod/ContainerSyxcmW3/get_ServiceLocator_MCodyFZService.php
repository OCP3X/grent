<?php

namespace ContainerSyxcmW3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MCodyFZService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.mCodyFZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mCodyFZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'VeicoliInfo' => ['privates', '.errored..service_locator.mCodyFZ.App\\Entity\\VeicoliInfo', NULL, 'Cannot autowire service ".service_locator.mCodyFZ": it needs an instance of "App\\Entity\\VeicoliInfo" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'VeicoliInfo' => 'App\\Entity\\VeicoliInfo',
            'entityManager' => '?',
        ]);
    }
}
