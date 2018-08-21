<?php

class Computer
{
    public $brand;
    public $model;
}

$macbook = new Computer;
$macbook->brand = 'Apple';

echo "This MacBook was built by $macbook->brand";