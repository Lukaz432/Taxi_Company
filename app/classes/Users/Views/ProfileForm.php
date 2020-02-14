<?php

namespace App\Users\Views;

use App\App;

class ProfileForm extends \Core\Views\Form {

    public function __construct($data = []) {

        $user = App::$session->getUser();

        $this->data = [
            'attr' => [
                'id' => 'update-form',
                'method' => 'POST',
            ],
            'fields' => [
                'name' => [
                    'label' => 'First Name',
                    'type' => 'text',
                    'value' => $user->getName(),
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_has_no_space',
                            'validate_first_letter_is_capital'
                        ]
                    ],
                ],
                'surname' => [
                    'label' => 'Last Name',
                    'type' => 'text',
                    'value' => $user->getSurname(),
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_has_no_space',
                            'validate_first_letter_is_capital'
                        ]
                    ],
                ],
                'phone' => [
                    'label' => 'Phone Number',
                    'type' => 'text',
                    'value' => $user->getPhone(),
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_has_no_space',
                            'validate_phone_number'
                        ]
                    ],
                ],
                'password' => [
                    'label' => 'Password',
                    'type' => 'password',
                    'value' => $user->getPassword(),
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_has_no_space',
                            'validate_contains_capital_letter'
                        ]
                    ],
                ],
                'password_repeat' => [
                    'label' => 'Password repeat',
                    'type' => 'password',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_has_no_space'
                        ]
                    ],
                ],
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Save Changes',
                ],
            ],
            'validators' => [
                'validate_fields_match' => [
                    'password',
                    'password_repeat'
                ]
            ],
            'callbacks' => [
                'success' => 'form_success',
            ],
        ];
    }
}