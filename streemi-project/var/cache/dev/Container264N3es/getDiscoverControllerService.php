<?php

namespace Container264N3es;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDiscoverControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\DiscoverController' shared autowired service.
     *
     * @return \App\Controller\DiscoverController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/DiscoverController.php';

        $container->services['App\\Controller\\DiscoverController'] = $instance = new \App\Controller\DiscoverController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\DiscoverController', $container));

        return $instance;
    }
}
