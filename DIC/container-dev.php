<?php

$container = new \Pimple\Container();

$container['writer'] = function($c) {
    return new \Insign\Writer\EchoWriter();
};

$container['logger'] = function($c) {
    return new \Insign\Logger\WriterLogger($c['writer']);
};

return $container;