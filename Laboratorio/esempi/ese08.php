<form action="" method="post">

    <input type="text" name="nome" id="">
    <input type="text" name="cognome" id="">
    <input type="text" name="indirizzo" id="">
    <input type="text" name="telefono" id="">
    <input type="submit" value="invia">

</form>

<?php

if (isset($_POST)){

    foreach ($_POST as $chiave => $valore) {
        echo $chiave . ": " . $valore;
        echo "<br>";
    }


}




?>