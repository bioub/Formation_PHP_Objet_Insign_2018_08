<?php

require_once './autoload.php';

// objet
$c1 = (new \Insign\Model\Contact())->setFirstName('Jean');
$c2 = $c1;
$c2->setFirstName('Eric');

echo $c1->getFirstName() . "\n"; // ????

// scalaire
$s1 = 'Jean';
$s2 = $s1;
$s2 = 'Eric';

echo $s1 . "\n"; // ????
