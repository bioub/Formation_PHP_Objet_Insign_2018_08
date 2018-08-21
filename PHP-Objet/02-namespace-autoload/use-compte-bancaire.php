<?php

use Insign\Finance\Account;

require_once 'autoload.php';

try {
    $compte = new Account('Bill Gates', Account::COURANT);
    $compte->credit(10000);
    $compte->debit(500);
    echo "Solde: {$compte->getBalance()}";
} catch (Exception $e) {
    // TODO créer une classe de log
}