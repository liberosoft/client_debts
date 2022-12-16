<?php

namespace App\Entity;

class Debt
{
    private int $id;
    private int $id_client;
    private string $debt_name;
    private float $amount;

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
    public function getIdClient(): int
    {
        return $this->id_client;
    }

    /**
     * @param int $id_client
     */
    public function setIdClient(int $id_client): void
    {
        $this->id_client = $id_client;
    }

    /**
     * @return string
     */
    public function getDebtName(): string
    {
        return $this->debt_name;
    }

    /**
     * @param string $debt_name
     */
    public function setDebtName(string $debt_name): void
    {
        $this->debt_name = $debt_name;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }
}