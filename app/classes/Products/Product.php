<?php

namespace App\Products;

class Product {

    private $data = [];

    public function __construct($data = null) {
        if ($data) {
            $this->setData($data);
        } else {
            $this->data = [
                'id' => null,
                'name' => null,
                'review' => null,
                'timestamp' => null,
            ];
        }
    }

    /**
     * * Sets all data from array
     * @param $array
     */
    public function setData($array) {
        if (isset($array['id'])) {
            $this->setId($array['id']);
        } else {
            $this->data['id'] = null;
        }
        $this->setId($array['id'] ?? null);
        $this->setName($array['name'] ?? null);
        $this->setReview($array['review'] ?? null);
        $this->setTimestamp($array['timestamp'] ?? null);

    }

    /**
     * Gets all data as array
     * @return array
     */
    public function getData() {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'review' => $this->getReview(),
            'timestamp' => $this->getTimestamp(),
        ];
    }

    /**
     * @param int $id
     */
    public function setId(int $id) {
        $this->data['id'] = $id;
    }

    /**
     * @return int|null
     */
    public function getId() {
        return $this->data['id'];
    }

    /**
     * Sets name
     * @param string $name
     */
    public function setName(string $name) {
        $this->data['name'] = $name;
    }

    /**
     * Returns name
     * @return string
     */
    public function getName() {
        return $this->data['name'];
    }

    /**
     * Sets review
     * @param string $review
     */
    public function setReview(int $review) {
        $this->data['review'] = $review;
    }

    /**
     * Returns review
     * @return string
     */
    public function getReview() {
        return $this->data['review'];
    }

    /**
     * Sets Timestamp
     * @param string $timestamp
     */
    public function setTimestamp(int $timestamp) {
        $this->data['timestamp'] = $timestamp;
    }

    /**
     * Returns timestamp
     * @return string
     */
    public function getTimestamp() {
        return $this->data['timestamp'];
    }

}