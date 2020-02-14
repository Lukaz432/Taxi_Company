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
                'name' => null,
                'surname' => null,
                'city' => null,
                'age' => null,
                'weapon' => null,
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
        $this->setName($array['name'] ?? null);
        $this->setSurname($array['surname'] ?? null);
        $this->setCity($array['city'] ?? null);
        $this->setAge($array['age'] ?? null);
        $this->setWeapon($array['weapon'] ?? null);
    }

    /**
     * Gets all data as array
     * @return array
     */
    public function getData() {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'surname' => $this->getSurname(),
            'city' => $this->getCity(),
            'age' => $this->getAge(),
            'weapon' => $this->getWeapon(),
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
     * Sets data surname
     * @param string $surname
     */
    public function setSurname(string $surname) {
        $this->data['surname'] = $surname;
    }

    /**
     * @return mixed
     */
    public function getSurname() {
        return $this->data['surname'];
    }

    /**
     * Sets data city
     * @param string $city
     */
    public function setCity(string $city) {
        $this->data['city'] = $city;
    }

    /**
     * @return mixed
     */
    public function getCity() {
        return $this->data['city'];
    }

    /**
     * Sets data age
     * @param string $age
     */
    public function setAge(string $age) {
        $this->data['age'] = $age;
    }

    /**
     * @return mixed
     */
    public function getAge() {
        return $this->data['age'];
    }

    /**
     * Sets data weapon
     * @param string $weapon
     */
    public function setWeapon(string $weapon) {
        $this->data['weapon'] = $weapon;
    }

    /**
     * @return mixed
     */
    public function getWeapon() {
        return $this->data['weapon'];
    }

}