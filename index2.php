<?php
require_once __DIR__ . '/classes/Dipendente.php';
require_once __DIR__ . '/classes/Manager.php';

try {
$dip1 = new Dipendente ('Pietro', 'Sette', 7, 'Amministrazione');
} catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
}

try {
$dip2 = new Manager ('Pietro', 'Sette', 7, 'Amministrazione', '');
} catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
}

// echo $dip1->getIdDipendente();
// var_dump($dip1);
var_dump($dip2);

try {
echo $dip2->getBenefits();
} catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
}
// $dip2->setBenefits(["orologio", "cellulare", "buono stadio"]);
// echo $dip2->getBenefits();
