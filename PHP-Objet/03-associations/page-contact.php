<?php

require_once './autoload.php';

$microsoft = new \Insign\Model\Company();
$microsoft->setName('Microsoft');

$bill = new \Insign\Model\Contact();
$bill->setFirstName('Bill')->setLastName('Gates');

// association
$bill->setCompany($microsoft);

// rendu (view/template)
// -------
?>
<p><b>Prénom : </b> <?=$bill->getFirstName()?></p>
<p><b>Nom : </b> <?=$bill->getLastName()?></p>

<?php if ($bill->getCompany()) : ?>
<p><b>Société : </b> <?=$bill->getCompany()->getName()?></p>
<?php endif; ?>