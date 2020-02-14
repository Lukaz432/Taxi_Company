<?php

namespace App\Participants\Views;

class ApiForm extends \Core\Views\Form
{

    public function __construct($data = [])
    {
        $this->data = [
            'fields' => [
                'service' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                        ]
                    ]
                ],
                'img' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                        ]
                    ]
                ],
                'description' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                        ]
                    ]
                ],
                'callbacks' => [
                    'success' => 'form_success',
                    'fail' => 'form_fail'
                ]
            ]
        ];
    }

}