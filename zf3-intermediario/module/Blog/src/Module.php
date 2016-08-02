<?php

namespace Blog;

use Blog\Controller\BlogController;

use Blog\Form\Factory\PostFormFactory;
use Blog\Form\PostForm;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

use Blog\Model\Factory\PostTableGatewayFactory;
use Blog\Model\Factory\PostTableFactory;
use Blog\Controller\Factory\BlogControllerFactory;

class Module implements ConfigProviderInterface
{
    public function getConfig()
    {
        return include __DIR__."/../config/module.config.php";
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                Model\PostTable::class  => PostTableFactory::class,
                Model\PostTableGateway::class => PostTableGatewayFactory::class,
                PostForm::class => PostFormFactory::class
            ]
        ];
    }

    public function getControllerConfig()
    {
        return [
            'factories'=>[
                BlogController::class => BlogControllerFactory::class
            ]
        ];
    }
}