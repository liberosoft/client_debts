<?php

namespace App\Repository;

use App\Entity\Client;
use App\Service\Logger;

class ClientRepository
{
    // Usually better to autowire service classes like Logger in the constructor. Keeps data classes and service classes separate

    public function getByClientNumber(string $clientNumber, Logger $logger) : ?Client
    {
        // get client from the database
        // fake data for now
        //return null;

        $logger::log('Getting client by client number: '.$clientNumber.' from the database');

        $client = new Client();
        $client->setId(1);
        $client->setClientNumber($clientNumber);
        $client->setEmail('test@test.com');
        $client->setName('John Doe');
        return $client;
    }

    public function save(Logger $logger): void
    {
        $logger::log('Saving client to the database');
    }
}