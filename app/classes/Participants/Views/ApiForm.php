<?php

namespace App\Participants\Views;

class ApiForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'fields' => [
                'name' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_has_no_space',
                            'validate_first_letter_is_capital'
                        ]
                    ]
                ],
                'surname' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_has_no_space',
                            'validate_first_letter_is_capital'
                        ]
                    ]
                ],
                'city' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_first_letter_is_capital'
                        ]
                    ]
                ],
                'age' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_has_no_space',
                            'validate_age'
                        ]
                    ]
                ],
                'weapon' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_has_no_space'
                        ]
                    ]
                ],
            ],
            'callbacks' => [
                'success' => 'form_success',
                'fail' => 'form_fail'
            ]
        ];
    }

}