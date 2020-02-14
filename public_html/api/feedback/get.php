<?php

require '../../../bootloader.php';

$response = new \Core\Api\Response();
$review = new \App\Feedback\Review();

$models = [
    'review' => new \App\Feedback\Model(),
    'user' => new \App\Users\Model(),
];

$conditions = $_POST ?? [];

$reviews = $models['review']->get($conditions);

if ($reviews !== false) {
    foreach ($reviews as $review) {
        $review_arr = $review->getData();
//        $review_arr['timestamp'] = date('y-m-d', $review_arr['timestamp']);
        $review_arr['timestamp'] = time_ago($review_arr['timestamp']);

        $user = $models['user']->getId($review_arr['user_id']);
        $review_arr['full_name'] = $user->getName() . ' ' . $user->getSurname();

        unset($review_arr['user_id']);

        $response->addData($review_arr);
    }
} else {
    $response->addError('Could not pull data from database!');
}

$response->print();