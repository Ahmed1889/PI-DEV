<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerApby5ns\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerApby5ns/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerApby5ns.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerApby5ns\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerApby5ns\appDevDebugProjectContainer([
    'container.build_hash' => 'Apby5ns',
    'container.build_id' => '61194afd',
    'container.build_time' => 1582679341,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerApby5ns');
