<?php

namespace App\Users\Views;

class LoginForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'attr' => [
                'id' => 'login-form',
                'method' => 'POST',
            ],
            'fields' => [
                'email' => [
                    'label' => 'El. Paštas',
                    'type' => 'email',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_mail',
                            'validate_mail_exists_not',
                        ]
                    ],
                ],
                'password' => [
                    'label' => 'Slaptažodis',
                    'type' => 'password',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                        ]
                    ],
                ],
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Prisijungti',
                ],
            ],
            'validators' => [
                'validate_login'
            ],            
            'callbacks' => [
                'success' => 'form_success',
            ],
        ];
    }

}
