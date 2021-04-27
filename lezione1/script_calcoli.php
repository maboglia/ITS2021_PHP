<?php

//include 'header.php';


if ( isset($_POST['valore1']) &&  isset($_POST['valore2']) ){

    $risultato = $_POST['valore1'] + $_POST['valore2'];

}   


//echo $risultato;
//include 'footer.php';
?>

<h2>Il risultato è: <?=$risultato?></h2>
