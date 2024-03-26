<?php

namespace ContainerSyxcmW3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebuserRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\WebuserRepository' shared autowired service.
     *
     * @return \App\Repository\WebuserRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\WebuserRepository'] = new \App\Repository\WebuserRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
