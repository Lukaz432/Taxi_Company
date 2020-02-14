<?php

namespace App\Users;

class User {

    private $data = [];

    public function __construct($data = null) {
        if ($data) {
            $this->setData($data);
        } else {
            $this->data = [
                'id' => null,
                'name' => null,
                'surname' => null,
                'email' => null,
                'phone' => null,
                'password' => null,
//                'user_id' => null,
            ];
        }
    }

    public function setData($array) {
        if (isset($array['id'])) {
            $this->setId($array['id']);
        } else {
            $this->data['id'] = null;
        }

        $this->setName($array['name'] ?? null);
        $this->setSurname($array['surname'] ?? null);
        $this->setEmail($array['email'] ?? null);
        $this->setPhone($array['phone'] ?? null);
        $this->setPassword($array['password'] ?? null);
//        $this->setUserId($array['user_id'] ?? null);
    }

    public function getData() {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'surname' => $this->getSurname(),
            'email' => $this->getEmail(),
            'phone' => $this->getPhone(),
            'password' => $this->getPassword(),
//            'user_id' => $this->getUserId(),
        ];
    }

    public function setId(int $id) {
        $this->data['id'] = $id;
    }

    public function getId() {
        return $this->data['id'];
    }

    public function setName(string $name) {
        $this->data['name'] = $name;
    }

    public function getName() {
        return $this->data['name'];
    }

    public function setSurname(string $surname) {
        $this->data['surname'] = $surname;
    }

    public function getSurname() {
        return $this->data['surname'];
    }

    public function setEmail(string $email) {
        $this->data['email'] = $email;
    }

    public function getEmail() {
        return $this->data['email'];
    }

    public function setPhone($phone) {
        $this->data['phone'] = $phone;
    }

    public function getPhone() {
        return $this->data['phone'];
    }

    public function setPassword(string $password) {
        $this->data['password'] = $password;
    }

    public function getPassword() {
        return $this->data['password'];
    }

//    public function setUserId(int $user_id){
//        $this->data['user_id'] = $user_id;
//    }
//
//    public function getUserId(){
//        return $this->data['user_id'];
//    }

}
