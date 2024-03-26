<?php

namespace ContainerSyxcmW3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLavagnaRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\LavagnaRepository' shared autowired service.
     *
     * @return \App\Repository\LavagnaRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService'));

        if (isset($container->privates['App\\Repository\\LavagnaRepository'])) {
            return $container->privates['App\\Repository\\LavagnaRepository'];
        }

        return $container->privates['App\\Repository\\LavagnaRepository'] = new \App\Repository\LavagnaRepository(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->services['router'] ?? $container->getRouterService()), $a);
    }
}