<?php

namespace App\Reviews;

use \App\App;

class Model {

    private $table_name = 'reviews';

    public function __construct() {
        App::$db->createTable($this->table_name);
    }

    /**
     * Irašo $review i duombaze
     * @param Review $review
     * @return bool
     */
    public function insert(Review $review) {
        return App::$db->insertRow($this->table_name, $review->getData());
    }

    /**
     * @param array $conditions
     * @return array
     */
    public function get($conditions = []) {
        $previews = [];
        $rows = App::$db->getRowsWhere($this->table_name, $conditions);
        foreach ($rows as $row_id => $row_data) {
            $row_data['id'] = $row_id;
            $reviews[] = new Review($row_data);
        }

        return $reviews;
    }

    /**
     * @param Review $review
     * @return bool
     */
    public function update(Review $review) {
        return App::$db->updateRow($this->table_name, $review->getId(), $review->getData());
    }

    /**
     * deletes all reviews from database
     * @param Review $review
     * @return bool
     */
    public function delete(Review $review) {
        return App::$db->deleteRow($this->table_name, $review->getId());
    }

    public function __destruct() {
        App::$db->save();
    }

}