<?php

namespace Blog\Model\Factory;

use Blog\Model\PostTable;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Blog\Model;

class PostTableFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $tableGateway = $container->get(Model\PostTableGateway::class);
        return new PostTable($tableGateway);
    }
}