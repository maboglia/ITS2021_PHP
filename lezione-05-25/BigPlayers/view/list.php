<?php

$result = mysqli_query($conn, "select * from players");

//print_r($result);
?>


<table class="table table-striped">

<thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Sport</th>
      <th scope="col">Azioni</th>
    </tr>
</thead>
<tbody>
<?php 
//ciclo i risultati e li inserisco nelle td

while ($player = mysqli_fetch_object($result)) {
  echo "<tr>";
    echo "<td>".$player->nome."</td>";
    echo "<td>".$player->sport."</td>";
    echo "<td><a class='btn btn-danger' href='?p=detail&idPlayer=".$player->id."'>dettaglio</a></td>";


  echo "</tr>";
}

?>
</tbody>



</table>