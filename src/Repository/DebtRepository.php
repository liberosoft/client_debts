<?php

namespace App\Repository;

use App\Entity\Debt;
use App\Service\Logger;

class DebtRepository
{
    public function save(Debt $debt, Logger $logger)
    {
        $logger::log('Saving debt '.$debt->getDebtName().' to the database...');
    }

    public function removeAllClientDebts(int $id_client, Logger $logger)
    {
        $logger::log('Removing all debts from the database for client '.$id_client);
    }
}