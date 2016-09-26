<?php

use Doctrine\ORM\EntityManager;
use User\Entity\User;

return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => \Doctrine\DBAL\Driver\PDOMySql\Driver::class,
            )
        ),
        'authentication' => [
            'orm_default' => [
                'object_manager' => EntityManager::class,
                'identity_class' => User::class,
                'identity_property' => 'username',
                'credential_property' => 'password',
                'credential_callable' => function (User $user, $passwordSent) {
                    return password_verify($passwordSent, $user->getPassword());
                }
            ]
        ]
    ),
);