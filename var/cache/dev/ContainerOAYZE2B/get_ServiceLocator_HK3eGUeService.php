<?php

namespace ContainerOAYZE2B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HK3eGUeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hK3eGUe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hK3eGUe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'translator' => ['services', 'translator', 'getTranslatorService', false],
            'webuserRepository' => ['privates', 'App\\Repository\\WebuserRepository', 'getWebuserRepositoryService', true],
        ], [
            'translator' => '?',
            'webuserRepository' => 'App\\Repository\\WebuserRepository',
        ]);
    }
}
