<?php

namespace ContainerSyxcmW3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVeicoliTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\VeicoliType' shared autowired service.
     *
     * @return \App\Form\VeicoliType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\VeicoliType'] = new \App\Form\VeicoliType();
    }
}
