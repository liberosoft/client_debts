<?php

namespace App\Entity;

class Address
{
    private int $id;

    private int $id_customer;

    private string $address_code;

    private string $info;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getIdCustomer(): int
    {
        return $this->id_customer;
    }

    /**
     * @param int $id_customer
     */
    public function setIdCustomer(int $id_customer): void
    {
        $this->id_customer = $id_customer;
    }

    /**
     * @return string
     */
    public function getAddressCode(): string
    {
        return $this->address_code;
    }

    /**
     * @param string $address_code
     */
    public function setAddressCode(string $address_code): void
    {
        $this->address_code = $address_code;
    }

    /**
     * @return string
     */
    public function getInfo(): string
    {
        return $this->info;
    }

    /**
     * @param string $info
     */
    public function setInfo(string $info): void
    {
        $this->info = $info;
    }
}