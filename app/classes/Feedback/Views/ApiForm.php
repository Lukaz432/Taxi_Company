<?php

namespace App\Feedback\Views;

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
                'name' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                        ]
                    ]
                ],
                'review' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                        ]
                    ]
                ],
                'timestamp' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                        ]
                    ]
                ],
            ],
        ];
    }

}