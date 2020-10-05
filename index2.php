<?php
require_once __DIR__ . '/classes/Dipendente.php';
require_once __DIR__ . '/classes/Manager.php';


$dip1 = new Dipendente ('777', 'Pietro', 'Sette', '7', 'Amministrazione');
$dip2 = new Manager ('777', 'Pietro', 'Sette', '7', 'Amministrazione', ['Auto', 'Cellulare']);

var_dump($dip1);
var_dump($dip2);

echo $dip2->getBenefits();
$dip2->setBenefits(["orologio", "cellulare", "buono stadio"]);
echo $dip2->getBenefits();
 ?>
