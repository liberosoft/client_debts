<?php

namespace App\Repository;

use App\Entity\Address;
use App\Service\Logger;

// Probably overkill to have a repository dedicated to fetching client addresses
// You can just add a method on client repository for this
class AddressRepository
{
    public function save(Address $address, Logger $logger) : void
    {
        $logger::log('Saving client address '.$address->getInfo().' to the database...');
    }

    public function removeAllClientAddresses(int $id_client, Logger $logger) : void
    {
        $logger::log('Removing all addresses from the database for client '.$id_client);
    }
}