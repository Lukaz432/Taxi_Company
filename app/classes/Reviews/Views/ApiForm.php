<?php

namespace App\Reviews\Views;

class ApiForm extends \Core\Views\Form
{

    public function __construct($data = [])
    {
        $this->data = [
            'callbacks' => [
                'success' => 'form_success',
                'fail' => 'form_fail',
            ],
            'fields' => [
                'review' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                        ]
                    ]
                ],
                'rating' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                        ]
                    ]
                ]
            ],
        ];
    }

}