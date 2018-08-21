<?php

require_once './autoload.php';

function lambdaFileWriterFactory() {
    $path = __DIR__ . '/app.tmp';
    return new \MyCompany\IO\FileWriter($path);
}

function lambda() {
    $fw = lambdaFileWriterFactory();
    $fw->writeLn('Appel de la fonction lambda');
}

function gamma() {
    $path = __DIR__ . '/app.tmp';
    $fw = new \MyCompany\IO\FileWriter($path);
    $fw->writeLn('Appel de la fonction gamma');
}

$debut = microtime(true);

for ($i=0; $i<50000; $i++) {
    lambda();
    gamma();
}

echo microtime(true) - $debut;