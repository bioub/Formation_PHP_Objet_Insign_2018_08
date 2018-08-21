<?php

use Insign\Finance\Account as BankAccount;

require_once 'autoload.php';

try {
    $compte = new BankAccount('Bill Gates', BankAccount::COURANT);
    $compte->credit(10000);
    $compte->debit(500);
    echo "Solde: {$compte->getBalance()}";
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}