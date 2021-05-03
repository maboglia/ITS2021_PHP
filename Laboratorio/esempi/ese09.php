<?php
//faccio partire la sessione, questa deve esssere la prima istruzione di una pagina, altrimenti la sessione non funziona
session_start();

function stampaIngredienti($ingredienti)
{
    //stampo gli elementi della lista
    foreach($ingredienti as $ingrediente){
        echo $ingrediente."<br>";
    }

}


//la prima volta che accedo verifico l'esistenza dell'array in sessione, altrimento lo creo
$container =  (isset($_SESSION['elenco']))?$_SESSION['elenco']:[];

if (    isset($_POST['ingrediente'])      )  {
    $container[] = $_POST['ingrediente'];
   
}
?>

<form action="" method="post">
    <input type="text" name="ingrediente">
    <input type="submit" value="aggiungi">

</form>


<?php

//memorizzo container in sessione
$_SESSION['elenco'] = $container;


stampaIngredienti($container);

?>