<?php

namespace App\Users\Views;

class RegisterForm extends \Core\Views\Form
{

    public function __construct($data = [])
    {
        $this->data = [
            'attr' => [
                'id' => 'register-form',
                'method' => 'POST',
            ],
            'fields' => [
                'name' => [
                    'label' => 'Vardas *',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_name_char_limit',
                        ]
                    ],
                ],
                'surname' => [
                    'label' => 'Pavardė *',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_surname_char_limit',
                        ]
                    ],
                ],
                'email' => [
                    'label' => 'El. Paštas *',
                    'type' => 'email',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_mail',
                            'validate_mail_exists',
                        ]
                    ],
                ],
                'password' => [
                    'label' => 'Slaptažodis *',
                    'type' => 'password',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                        ]
                    ],
                ],
                'phone' => [
                    'label' => 'Telefono Numeris',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                        ]
                    ],
                ],
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Registruotis',
                ],
            ],
            'validators' => [
                'validate_fields_match' => [
                    'password',
                ]
            ],
            'callbacks' => [
                'success' => 'form_success',
            ],
        ];
    }

}