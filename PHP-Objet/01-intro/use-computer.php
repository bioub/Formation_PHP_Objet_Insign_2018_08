<?php
include_once './Computer.php';

$macbook = new Computer();

$macbook->setBrand('Apple')
        ->setModel('MacBook');

$macbook->start();

$thinkpad = new Computer();
$thinkpad->start();
