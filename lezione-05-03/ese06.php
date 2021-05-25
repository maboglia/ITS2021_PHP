<?php


$auto = ["Fiat", "Mercedes", "Lancia"];

$vendite2020 = [
    [100,120,130],
    [85,56,89],
    [45,61,65],
    [77,26,39],
];


$righe = count($vendite2020);

echo '<table style="border: 1px solid black">';

for ($i=0; $i < $righe; $i++) { 
    // var_dump($vendite2020[$i]);

    echo "<tr>";
    
    for ($j=0; $j < count($vendite2020[$i]); $j++) { 
        echo "<td style='border:1px solid red'>" . $vendite2020[$i][$j]  . "</td>" ;
    }//fine ciclo interno (colonne)
    
    echo "</tr>";


}//fine ciclo esterno (righe)

echo '</table>';
