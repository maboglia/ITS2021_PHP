<form action="" method="post" enctype="multipart/form-data" >

    <label for="nome">nome</label>
    <input type="text" name="nome" id="nome">

    <label for="cognome">cognome</label>
    <input type="text" name="cognome" id="cognome">

    <label for="foto">foto</label>
    <input type="file" name="foto" id="foto">

    <input type="submit" value="invia">

</form>

<?php

if (isset($_POST['nome'])){

    foreach ($_POST as $key => $value) {
        echo $key;
        echo ": ";
        echo $value;
        echo "<br>";
    }

    foreach ($_FILES as $key => $value) {
        echo $key;
        echo ": ";
         var_dump($value);
        echo "<br>";
    }



    
    // Cartella dove voglio salvare i file caricati
    
    $target_path = "files/";
    $target_path = $target_path.basename( $_FILES['foto']['name']);
    
    // Costruisco il path finale
    
    if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)) {
    echo "Il file ".basename( $_FILES['foto']['name'])." è stato caricato";
    }
    else { 
        echo "errore nel caricamento del file, riprova!";
    }
    
    

$img = $_FILES['foto']['name'];

    echo "<h1>$_POST[nome]</h1>";
    echo "<h2>$_POST[cognome]</h2>";
    echo "<img src=files/$img>";
}


?>

