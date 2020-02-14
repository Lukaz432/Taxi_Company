<?php

namespace App\Reviews;

class Review {

    private $data = [];

    public function __construct($data = null) {
        if ($data) {
            $this->setData($data);
        } else {
            $this->data = [
                'id' => null,
                'review' => null,
                'rating' => null,
                'user_id' => null,
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
        $this->setReview($array['review'] ?? null);
        $this->setRating($array['rating'] ?? null);
        $this->setUserId($array['user_id'] ?? null);
        $this->setTimestamp($array['timestamp'] ?? null);

    }

    /**
     * Gets all data as array
     * @return array
     */
    public function getData() {
        return [
            'id' => $this->getId(),
            'review' => $this->getReview(),
            'rating' => $this->getRating(),
            'user_id' => $this->getUserId(),
            'timestamp' => $this->getTimestamp()
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
     * Sets review
     * @param string $review
     */
    public function setReview(string $review) {
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
     * Sets rating
     * @param int $rating
     */
    public function setRating(int $rating) {
        $this->data['rating'] = $rating;
    }

    /**
     * Returns rating
     * @return int
     */
    public function getRating() {
        return $this->data['rating'];
    }

    /**
     * Sets user_id
     * @param int $user_id
     */
    public function setUserId(int $user_id) {
        $this->data['user_id'] = $user_id;
    }

    /**
     * Returns name
     * @return string
     */
    public function getUserId() {
        return $this->data['user_id'];
    }

    /**
     * Sets timestamp
     * @param string $timestamp
     */
    public function setTimestamp(string $timestamp) {
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