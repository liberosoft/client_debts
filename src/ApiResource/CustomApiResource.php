<?php

namespace App\ApiResource;

use App\Entity\Address;
use App\Entity\Debt;
use App\Service\Logger;

class CustomApiResource extends ApiResource
{

    public function getClientCode(string $clientNumber, Logger $logger): ?string
    {
        // get client code from api resource
        // fake data for now

        $logger::log('Geting client code from API Resource by client number: '.$clientNumber);

        // return  null;

        return '123';
    }

    /**
     * @return Debt[]|null
     */
    public function getClientDebts(string $clientCode, Logger $logger): ?array
    {
        $logger::log('Geting client debts from API Resource by client code: '.$clientCode);

        // return null;

        // get data from api resource
        // fake data for now
        $debt1 = new Debt();
        $debt1->setId(1);
        $debt1->setIdClient(1);
        $debt1->setDebtName('Invoice');
        $debt1->setAmount(100);

        $debt2 = new Debt();
        $debt2->setId(2);
        $debt2->setIdClient(1);
        $debt2->setDebtName('Power');
        $debt2->setAmount(100);

        return [$debt1, $debt2];
    }

    /**
     * @return Address[]|null
     */
    public function getClientAddresses(string $clientCode, Logger $logger) : ?array
    {
        $logger::log('Geting client address from API Resource by client code: '.$clientCode);

        // return null;

        // get data from api resource
        // fake data for now
        $address1 = new Address();
        $address1->setId(1);
        $address1->setIdCustomer(1);
        $address1->setInfo('Address for invoice '.$clientCode);

        $address2 = new Address();
        $address2->setId(1);
        $address2->setIdCustomer(1);
        $address2->setInfo('Address for delivery '.$clientCode);

        return [$address1, $address2];
    }
}