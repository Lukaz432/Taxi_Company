<?php

namespace App\Participants\Views;

class BaseForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'fields' => [
                'name' => [
                    'label' => 'Paslaugos Nuotrauka',
                    'type' => 'text',
                ],
                'surname' => [
                    'label' => 'Paslauga',
                    'type' => 'text',
                ],
                'city' => [
                    'label' => 'Paslaugos Aprašymas',
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