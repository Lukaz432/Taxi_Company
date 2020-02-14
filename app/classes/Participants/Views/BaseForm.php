<?php

namespace App\Participants\Views;

class BaseForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'fields' => [
                'name' => [
                    'label' => 'Driver Name',
                    'type' => 'text',
                ],
                'surname' => [
                    'label' => 'Driver Experience(years)',
                    'type' => 'text',
                ],
                'city' => [
                    'label' => 'Country/State',
                    'type' => 'text',
                ],
                'age' => [
                    'label' => 'Age',
                    'type' => 'text',
                ],
                'weapon' => [
                    'label' => 'Quarter Mile Record(seconds)',
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