<?php

require_once './autoload.php';

function lambda() {
    $fw = \MyCompany\IO\FileWriterSingleton::getInstance();
    $fw->writeLn('Appel de la fonction lambda');
}

function gamma() {
    $fw = \MyCompany\IO\FileWriterSingleton::getInstance();
    $fw->writeLn('Appel de la fonction gamma');
}

$debut = microtime(true);

for ($i=0; $i<50000; $i++) {
    lambda();
    gamma();
}

echo microtime(true) - $debut;