<?php

require_once './autoload.php';

$ref1 = new \MyCompany\CountInstance();
echo $ref1->lambda() . "\n";

$ref2 = new \MyCompany\CountInstance();
echo $ref2->lambda() . "\n";

$ref3 = new \MyCompany\CountInstance();
echo $ref3->lambda() . "\n";

echo \MyCompany\CountInstance::getNbInstance();