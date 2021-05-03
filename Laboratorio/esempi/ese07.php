<?php

$auto1 = ["marca" => "fiat", "modello" => "500"];
$auto2 = ["marca" => "lancia", "modello" => "musa"];

$persona = ['nome'=>"mauro", 'cognome'=> 'bogliaccino'];

//echo $auto1["marca"];
//echo $auto2["marca"];

foreach ($auto1 as $key => $value) {
    echo $key.": ".$value;
}

