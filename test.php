<?php
require_once 'vendor/autoload.php';

// You should write some proper tests using PHPUnit so that you can trigger functionality and work things out
// It's also helpful for others to be able to run your code and see how it is working

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

