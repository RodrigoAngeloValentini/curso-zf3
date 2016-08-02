<?php

namespace User\Form;

use Zend\Form\Form;

class LoginForm extends Form
{
    public function __construct($name=null)
    {
        parent::__construct('login');

        $this->add([
            'name' => 'username',
            'type' => 'text',
            'options' => [
                'label' => 'Usuário'
            ]
        ]);

        $this->add([
            'name' => 'password',
            'type' => 'password',
            'options' => [
                'label' => 'Senha'
            ]
        ]);

        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'options' => [
                'value' => 'entrar',
                'id' => 'submitbutton'
            ]
        ]);
    }
}