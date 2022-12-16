<?php

namespace App\Service;

use App\ApiResource\ApiResource;
use App\Entity\Client;
use App\Repository\AddressRepository;
use App\Repository\ClientRepository;
use App\Repository\DebtRepository;

class GetClientDebts
{
    private ?Client $client;

    private ApiResource $apiResource;

    private ClientRepository $clientRepository;

    private AddressRepository $addressRepository;

    private DebtRepository $debtRepository;

    private string $clientNumber;

    private Logger $logger;

    private Notification $notification;


    public function __construct(
        string $clientNumber,
        ClientRepository $clientRepository,
        AddressRepository $addressRepository,
        DebtRepository $debtRepository,
        ApiResource $apiResource,
        Logger $logger,
        Notification $notification
    ) {
        $this->apiResource = $apiResource;
        $this->clientRepository = $clientRepository;
        $this->clientNumber = $clientNumber;
        $this->addressRepository = $addressRepository;
        $this->debtRepository = $debtRepository;
        $this->logger = $logger;
        $this->notification = $notification;
    }

    public function getUserDebts(): void
    {
        // questions:
        // 1. all data flow will be executed here - is that ok?
        // 2. where to start transaction database?
        // 3. when I set client addresses at the begining I remove all addresses and then fetch data from API and save it - is that ok or shouldI separate it into tho methods?
        // 4. same with debts
        // 5. such way of logging things by passing logger object to repositories is ok or should I log things in this service?

        $this->getClient();

        $this->setClientCode();

        $this->saveClient();

        $this->saveClientAddressess();

        $this->saveClientDebts();

        $this->sendNotification();
    }

    private function getClient(): void
    {
        $this->client = $this->clientRepository->getByClientNumber($this->clientNumber, $this->logger);

        if ($this->client === null) {
            throw new \Exception('Client with number ' . $this->clientNumber . ' does not exist');
        }
    }

    private function setClientCode(): void
    {
        $clientCode = $this->apiResource->getClientCode($this->clientNumber, $this->logger);

        if ($clientCode === null) {
            throw new \Exception('Client with number ' . $this->clientNumber . ' has no client code');
        }
        $this->client->setClientCode($clientCode);
    }

    private function saveClient() : void
    {
        $this->clientRepository->save($this->logger);
    }

    private function saveClientAddressess() : void
    {
        $this->addressRepository->removeAllClientAddresses($this->client->getId(), $this->logger);

        $clientAddresses = $this->apiResource->getClientAddresses($this->client->getClientCode(), $this->logger);

        if($clientAddresses === null) {
            return;
        }

        foreach($clientAddresses as $address) {
            $this->addressRepository->save($address, $this->logger);
        }
    }

    private function saveClientDebts() : void
    {
        $this->debtRepository->removeAllClientDebts($this->client->getId(), $this->logger);

        $clientDebts = $this->apiResource->getClientDebts($this->client->getClientCode(), $this->logger);

        if($clientDebts === null) {
            return;
        }

        foreach($clientDebts as $debt) {
            $this->debtRepository->save($debt, $this->logger);
        }
    }

    private function sendNotification() : void
    {
        $this->notification::send('all good :)', $this->logger);
    }
}