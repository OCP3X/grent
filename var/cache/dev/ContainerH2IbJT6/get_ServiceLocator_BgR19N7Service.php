<?php

namespace ContainerH2IbJT6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BgR19N7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bgR19N7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bgR19N7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'veicoli' => ['privates', '.errored..service_locator.bgR19N7.App\\Entity\\Veicoli', NULL, 'Cannot autowire service ".service_locator.bgR19N7": it needs an instance of "App\\Entity\\Veicoli" but this type has been excluded in "config/services.yaml".'],
            'veicoliRepository' => ['privates', 'App\\Repository\\VeicoliRepository', 'getVeicoliRepositoryService', true],
        ], [
            'veicoli' => 'App\\Entity\\Veicoli',
            'veicoliRepository' => 'App\\Repository\\VeicoliRepository',
        ]);
    }
}
