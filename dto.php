<?php

class User {
    private string $firstName;
    private string $lastName;
    private string $street;
    private string $zip;
    private string $city;

    public function __construct(array $data) {
        $this->firstName = $data['firstName'];
        $this->lastName = $data['lastName'];
        $this->street = $data['street'];
        $this->zip = $data['zip'];
        $this->city = $data['city'];
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function getStreet(): string {
        return $this->street;
    }

    public function getZip(): string {
        return $this->zip;
    }

    public function getCity(): string {
        return $this->city;
    }
}
