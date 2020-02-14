<?php

require '../../../bootloader.php';

$response = new \Core\Api\Response();

$review = new \App\Reviews\Review();

$models = [
    'review' => new \App\Reviews\Model(),
    'user' => new \App\Users\Model()
];

$conditions = $_POST ?? [];

$reviews = $models['review']->get($conditions);
if ($reviews !== false) {
    foreach ($reviews as $review) {

        $review_arr = $review->getData();
        $review_arr['timestamp'] = timeAgo($review_arr['timestamp']);

        $user = $models['user']->getId($review_arr['user_id']);
        $review_arr['full_name'] = $user->getName() . ' ' . $user->getSurname();
//
//        $stars = '';
//
//        for ($i = 1; $i <= 5; $i++) {
//            if ($i <= $review_arr['rating']) {
//                $stars .= '🟊';
//            } else {
//                $stars .= '✰';
//            }
//        }
//
//        $review_arr['rating'] = $stars;


    unset($review_arr['user_id']);
    $response->addData($review_arr);
}
} else {
    $response->addError('Could not pull data from database!');
}

$response->print();