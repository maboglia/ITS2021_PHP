<?php

  if (isset($_POST['nome'])){

    $nome = $_POST['nome'];
    $sport = $_POST['sport'];
    $foto = $_POST['foto'];

    mysqli_query($conn, "insert into players (nome, sport, foto) values ('$nome','$sport','$foto') ") or die(mysqli_error($conn));



  }

?>

<form method="post" action="">
  <div class="mb-3">
    <label for="nome" class="form-label">nome giocatore</label>
    <input type="text" class="form-control" name="nome" aria-describedby="nome">
  </div>


  <div class="mb-3">
    <label for="sport" class="form-label">sport</label>
    <input type="text" class="form-control" name="sport">
  </div>
  
  

  <div class="mb-3">
    <label for="foto" class="form-label">foto</label>
    <input type="text" class="form-control" name="foto">
  </div>
  

  <button type="submit" class="btn btn-primary">Aggiungi player</button>
</form>