<?php

require_once './autoload.php';

$path = __DIR__ . '/app.tmp';

$fw = new \MyCompany\IO\FileWriter($path);
$fw->writeLn('Une ligne');
$fw->writeLn('Une autre ligne');
