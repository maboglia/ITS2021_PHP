<?php

$id =  (int) $_GET['idPlayer'];

$result = mysqli_query($conn, "select * from players where id = $id");
$player = mysqli_fetch_array($result);

print_r($player);
?>


<div class="card" style="width: 18rem;">
  <img src="<?=$player["foto"]?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$player["nome"]?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>