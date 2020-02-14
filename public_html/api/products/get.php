<?php

require '../../../bootloader.php';

$response = new \Core\Api\Response();

$model = new App\Products\Model();

$conditions = $_POST ?? [];

$products = $model->get($conditions);
if ($products !== false) {
    foreach ($products as $person) {
        $response->addData($person->getData());
    }
} else {
    $response->addError('Could not pull data from database!');
}

$response->print();