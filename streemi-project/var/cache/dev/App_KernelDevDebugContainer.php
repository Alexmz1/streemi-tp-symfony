<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container264N3es\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container264N3es/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container264N3es.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container264N3es\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container264N3es\App_KernelDevDebugContainer([
    'container.build_hash' => '264N3es',
    'container.build_id' => '2812343a',
    'container.build_time' => 1728631268,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container264N3es');
