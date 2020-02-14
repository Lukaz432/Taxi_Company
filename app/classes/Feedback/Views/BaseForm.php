<?php

namespace App\Feedback\Views;

class BaseForm extends \Core\Views\Form
{

    public function __construct($data = [])
    {
        $this->data = [
            'fields' => [
                'review' => [
                    'label' => 'Review',
                    'type' => 'text',
                ],
                'rating' => [
                    'label' => 'Rating',
                    'type' => 'text',
                ],
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Submit',
                ],
            ]
        ];
    }

}
