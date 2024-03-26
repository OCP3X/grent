<?php

namespace ContainerH2IbJT6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRpxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\rpx' shared autowired service.
     *
     * @return \App\Service\rpx
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'rpx.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['App\\Service\\rpx'])) {
            return $container->privates['App\\Service\\rpx'];
        }
        $b = ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService'));

        if (isset($container->privates['App\\Service\\rpx'])) {
            return $container->privates['App\\Service\\rpx'];
        }

        return $container->privates['App\\Service\\rpx'] = new \App\Service\rpx(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), $a, $b);
    }
}
