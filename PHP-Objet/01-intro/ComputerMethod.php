<?php

class Computer
{
    public $brand;
    public $model;

    public function showInfos() {
        echo "This $this->model was built by $this->brand";
    }
}

$macbook = new Computer;
$macbook->brand = 'Apple';
$macbook->model = 'MacBook';
$macbook->showInfos();