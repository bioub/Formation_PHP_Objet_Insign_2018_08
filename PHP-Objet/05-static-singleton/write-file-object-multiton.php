<?php

require_once './autoload.php';

function lambda() {
    $path = __DIR__ . '/lamba.tmp';
    $fw = \MyCompany\IO\FileWriterMultiton::getInstance($path);
    $fw->writeLn('Appel de la fonction lambda');
}

function gamma() {
    $path = __DIR__ . '/gamma.tmp';
    $fw = \MyCompany\IO\FileWriterMultiton::getInstance($path);
    $fw->writeLn('Appel de la fonction gamma');
}

$debut = microtime(true);

for ($i=0; $i<50000; $i++) {
    lambda();
    gamma();
}

echo microtime(true) - $debut;