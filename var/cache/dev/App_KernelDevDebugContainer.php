<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIrOV5UR\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIrOV5UR/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIrOV5UR.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIrOV5UR\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIrOV5UR\App_KernelDevDebugContainer([
    'container.build_hash' => 'IrOV5UR',
    'container.build_id' => '4fbbaf3b',
    'container.build_time' => 1609085215,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIrOV5UR');
