<?php

require_once './autoload.php';

$microsoft = new \Insign\Model\Company();
$microsoft->setName('Microsoft');

$bill = new \Insign\Model\Contact();
$bill->setFirstName('Bill')->setLastName('Gates');

$steve = new \Insign\Model\Contact();
$steve->setFirstName('Steve')->setLastName('Ballmer');

// association
$microsoft->addContact($bill);
$microsoft->addContact($steve);

// rendu (view/template)
// -------
?>
<p><b>Nom : </b> <?=$microsoft->getName()?></p>

<?php foreach ($microsoft->getContacts() as $c) : ?>
<p><b>Prénom : </b> <?=$c?></p>
<?php endforeach; ?>