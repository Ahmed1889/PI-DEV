<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerB00psnz\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerB00psnz/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerB00psnz.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerB00psnz\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerB00psnz\appDevDebugProjectContainer([
    'container.build_hash' => 'B00psnz',
    'container.build_id' => '6cdaab0f',
    'container.build_time' => 1581504270,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerB00psnz');
