<?php

use \App\App;

require '../../../bootloader.php';

// Check user authorization
if (!App::$session->userLoggedIn()) {
    $response = new \Core\Api\Response();
    $response->addError('You are not authorized!');
    $response->print();
}

// Filter received data
$form = (new \App\Products\Views\ApiForm())->getData();
$filtered_input = get_form_input($form);
validate_form($filtered_input, $form);

/**
 * If request passes validation
 * this function is automatically
 * called
 *
 * @param type $filtered_input
 * @param type $form
 */
function form_success($filtered_input, &$form) {
    $response = new \Core\Api\Response();
    $model = new \App\Products\Model();

    $conditions = [
        'row_id' => intval($_POST['id'])
    ];

    //gauname areju su $drink objektais (siuo atveju viena objekta arejuje pagal paduota id
    $products = $model->get($conditions);
    if (!$products) {
        $response->addError('Review does not exist!');
    } else {
        $product = $products[0];

        //idedame i data holderi naujas vertes, kurias ivede useris
        //ir kurios atejo is javascripto
        $product->setName($filtered_input['name']);
        $product->setImage($filtered_input['image']);
        $product->setPrice($filtered_input['price']);
        $product->setDiscountPrice($filtered_input['discount_price']);
        $product->setInStock($filtered_input['in_stock']);

        //vertes, kurias idejome auksciau i data holderi updatinam
        //ir duombazeje FileDB ka daro $drinksModel->update($drink) metodas
        $model->update($product);

        // Irasom visa dalyvio informacija i response
        $response->setData($product->getData());
    }

    $response->print();
}

/**
 * If request fails validation
 * this function is automatically
 * called
 *
 * @param type $filtered_input
 * @param type $form
 */
function form_fail($filtered_input, &$form) {
    $response = new \Core\Api\Response();

    foreach ($form['fields'] as $field_id => $field) {
        if (isset($field['error'])) {
            $response->addError($field['error'], $field_id);
        }
    }

    $response->print();
}