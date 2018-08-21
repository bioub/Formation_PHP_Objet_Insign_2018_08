<?php

use Insign\Finance\Account;

require_once __DIR__ . '/vendor/autoload.php';

$env = getenv('INSIGN_ENV') ? getenv('INSIGN_ENV') : 'prod';

$container = require __DIR__ . "/container-$env.php";
$logger = $container['logger'];

try {
    $bill = (new \Insign\Finance\Owner())->setFirstName('Bill');
    $compte = new Account($bill, Account::COURANT);
    $compte->credit(10000);
    $compte->debit(50000);
    echo "Solde: {$compte->getBalance()}";
}
catch (\Insign\Finance\Exception\BalanceNegativeException $e) {
    $logger->alert($e->getMessage());
}
catch (\Insign\Finance\Exception\AmountNegativeException $e) {
    $logger->warning($e->getMessage());
}
catch (Exception $e) {
    $logger->error($e->getMessage());
}