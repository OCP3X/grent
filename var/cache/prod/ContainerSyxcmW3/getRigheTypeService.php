<?php

namespace ContainerSyxcmW3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRigheTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\RigheType' shared autowired service.
     *
     * @return \App\Form\RigheType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\RigheType'] = new \App\Form\RigheType();
    }
}
