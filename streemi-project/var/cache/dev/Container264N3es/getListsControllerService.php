<?php

namespace Container264N3es;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ListsController' shared autowired service.
     *
     * @return \App\Controller\ListsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ListsController.php';

        $container->services['App\\Controller\\ListsController'] = $instance = new \App\Controller\ListsController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\ListsController', $container));

        return $instance;
    }
}
