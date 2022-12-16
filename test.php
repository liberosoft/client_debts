<?php
require_once 'vendor/autoload.php';


$userDebtService = new \App\Service\GetClientDebts(
    '333',
    new \App\Repository\ClientRepository(),
    new \App\Repository\AddressRepository(),
    new \App\Repository\DebtRepository(),
    new \App\ApiResource\CustomApiResource(),
    new \App\Service\BrowserLogger(),
    new \App\Service\NotificationEmail()
);

try {
    $userDebtService->getUserDebts();
} catch (Exception $e) {
    echo $e->getMessage();
}

