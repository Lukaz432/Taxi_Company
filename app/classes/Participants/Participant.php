<?php

namespace App\Participants;

class Participant {

    private $data = [];

    public function __construct($data = null) {
        if ($data) {
            $this->setData($data);
        } else {
            $this->data = [
                'id' => null,
                'service' => null,
                'img' => null,
                'description' => null,
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
        $this->setService($array['service'] ?? null);
        $this->setImg($array['img'] ?? null);
        $this->setDescription($array['description'] ?? null);
    }

    /**
     * Gets all data as array
     * @return array
     */
    public function getData() {
        return [
            'id' => $this->getId(),
            'service' => $this->getService(),
            'img' => $this->getImg(),
            'description' => $this->getDescription(),
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
     * Sets service
     * @param string $service
     */
    public function setService(string $service) {
        $this->data['service'] = $service;
    }

    /**
     * Returns name
     * @return string
     */
    public function getService() {
        return $this->data['service'];
    }

    /**
     * Sets data img
     * @param string $img
     */
    public function setImg(string $img) {
        $this->data['img'] = $img;
    }

    /**
     * @return mixed
     */
    public function getImg() {
        return $this->data['img'];
    }

    /**
     * Sets data description
     * @param string $description
     */
    public function setDescription(string $description) {
        $this->data['description'] = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->data['description'];
    }

}