<?php

use Insign\Finance\Account;

require_once 'autoload.php';

try {
    $bill = (new \Insign\Finance\Owner())->setFirstName('Bill');
    $compte = new Account($bill, Account::COURANT);
    $compte->credit(10000);
    $compte->debit(500);
    echo "Solde: {$compte->getBalance()}";
}
catch (\Insign\Finance\Exception\BalanceNegativeException $e) {
    // TODO créer une classe de log
}
catch (\Insign\Finance\Exception\AmountNegativeException $e) {
    // TODO créer une classe de log
}
catch (Exception $e) {
    // TODO créer une classe de log
}