<?php

$prefixes = [
    'Insign\\' => __DIR__ . '/lib/',
];

spl_autoload_register(function ($fqcn) use ($prefixes) {

    $path = strtr($fqcn, $prefixes) . '.php';
    $path = strtr($path, '\\', DIRECTORY_SEPARATOR);

    include_once $path;
});
