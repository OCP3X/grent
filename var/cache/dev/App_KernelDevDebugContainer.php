<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOAYZE2B\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOAYZE2B/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOAYZE2B.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOAYZE2B\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOAYZE2B\App_KernelDevDebugContainer([
    'container.build_hash' => 'OAYZE2B',
    'container.build_id' => '0716e301',
    'container.build_time' => 1707683561,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOAYZE2B');