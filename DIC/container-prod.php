<?php

$container = new \Pimple\Container();

$container['config'] = ['loggerPath' => __DIR__ . '/app.log'];

$container['handler'] = function($c) {
    return new \Monolog\Handler\StreamHandler($c['config']['loggerPath']);
};

$container['logger'] = function($c) {
    $logger = new \Monolog\Logger('logs');
    $logger->pushHandler($c['handler']);
    return $logger;
};

return $container;