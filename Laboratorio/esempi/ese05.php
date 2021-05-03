<?php
//scalare        0         1   2    3    4
$array = array("stringa", 12, true, NULL, 0.3);
$arrayShort = ["string", "string", true, NULL, 0.3];


$array[] = "pippo";

//echo count($array);

// for ($i=0; $i < count($array); $i++) { 
//     var_dump($array[$i]);
//     echo "<br>";
// }

print_r($array);
