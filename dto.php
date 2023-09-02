<?php

class User {
    private string $firstName;
    private string $lastName;

    private Address $invoiceAddress;
    private Address|null $deliveryAddress = null;

    public function __construct(array $data) {
        $this->firstName = $data['firstName'];
        $this->lastName = $data['lastName'];
        $this->invoiceAddress = new Address($data['invoiceAddress']);
        if (empty($data['deliveryAddress']['street'])) {
            $this->deliveryAddress = new Address($data['deliveryAddress']);
        }
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function getInvoiceAddress(): Address {
        return $this->invoiceAddress;
    }

    public function getDeliveryAddress(): Address {
        return $this->deliveryAddress ?: $this->invoiceAddress;
    }
}

class Address {
    private string $street;
    private string $zip;
    private string $city;

    public function __construct(array $data) {
        $this->street = $data['street'];
        $this->zip = $data['zip'];
        $this->city = $data['city'];
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
