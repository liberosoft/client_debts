<?php

namespace App\Entity;

class Client
{
    private int $id;

    /**
     * Every client knows this number
     * @var string $client_number
     */
    private string $client_number;

    /**
     * This code is used to fetch data from API
     * @var string $client_code
     */
    private string $client_code;

    private string $name;

    private string $email;

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
     * @return string
     */
    public function getClientNumber(): string
    {
        return $this->client_number;
    }

    /**
     * @param string $client_number
     */
    public function setClientNumber(string $client_number): void
    {
        $this->client_number = $client_number;
    }

    /**
     * @return string
     */
    public function getClientCode(): string
    {
        return $this->client_code;
    }

    /**
     * @param string $client_code
     */
    public function setClientCode(string $client_code): void
    {
        $this->client_code = $client_code;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}