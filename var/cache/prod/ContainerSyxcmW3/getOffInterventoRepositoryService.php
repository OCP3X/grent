<?php

namespace ContainerSyxcmW3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOffInterventoRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\OffInterventoRepository' shared autowired service.
     *
     * @return \App\Repository\OffInterventoRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\OffInterventoRepository'] = new \App\Repository\OffInterventoRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
