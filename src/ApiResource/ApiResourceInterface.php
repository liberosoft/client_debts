<?php

namespace App\ApiResource;

use App\Service\Logger;

interface ApiResourceInterface
{
    public function getClientCode(string $clientNumber, Logger $logger) : ?string;
    public function getClientDebts(string $clientCode, Logger $logger) : ?array;
    public function getClientAddresses(string $clientCode, Logger $logger) : ?array;
}