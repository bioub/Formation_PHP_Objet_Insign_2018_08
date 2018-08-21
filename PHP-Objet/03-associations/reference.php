<?php

require_once './autoload.php';

// objet
$c1 = (new \Insign\Model\Contact())->setFirstName('Jean');
$c2 = $c1;
$c2->setFirstName('Eric');

echo $c1->getFirstName() . "\n"; // Eric

// scalaire
$s1 = 'Jean';
$s2 = &$s1;
$s2 = 'Eric';

echo $s1 . "\n"; // Jean


// un tableau est un scalaire.
// pour le modifier dans une fonction
// il faut le passer par référence (ex: sort)
$array = [1, 2, 3];

function modifierTab(&$tablOrigin) {
    $tablOrigin[] = 4;
}

modifierTab($array);

var_dump($array);