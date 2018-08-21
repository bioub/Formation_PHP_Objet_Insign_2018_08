<?php

require_once './vendor/autoload.php';

$path = __DIR__ . '/app.log';
$fw = new \Formation\IO\FileWriter($path);
$logger1 = new \Formation\Logger\FileLoggerWithInterface($fw);
$logger2 = new \Formation\Logger\FileLoggerWithAbstractClass($fw);
$logger3 = new \Formation\Logger\FileLoggerWithTrait($fw);

function receiveLogger(\Psr\Log\LoggerInterface $logger)
{
    $logger->warning('Un warning');
}

receiveLogger($logger1);
receiveLogger($logger2);
receiveLogger($logger3);