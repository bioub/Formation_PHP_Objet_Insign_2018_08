<?php

require_once './autoload.php';

$path = __DIR__ . '/app.log';

$fw = new \MyCompany\IO\FileWriter($path);
$logger = new \MyCompany\Logger\FileLogger($fw);

$logger->log('warn', 'Un warning');
$logger->error('Une erreur');

// __invoke
// $logger();
