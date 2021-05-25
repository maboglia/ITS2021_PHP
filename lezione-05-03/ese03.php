<?php
//variabili
$a = 5;
$b = "6";
$a = 10;
$c = $a . $b;

var_dump($c);
//definire le costanti
define("ALIQUOTA_IVA", 0.22);

$prezzo_ic =  10000 +   (10000 * ALIQUOTA_IVA);

print_r($prezzo_ic);
