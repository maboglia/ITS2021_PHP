<?php

define("HOST", "localhost");
define("USER", "Its2020");
define("PASS", "Its2020");
define("DB_NAME", "Its2020");

//procedural way

$conn = mysqli_connect(HOST, USER, PASS, DB_NAME) or die("Non connesso!");

$res = mysqli_query($conn, "SELECT * from libro");
$libri = [];


while ($row = mysqli_fetch_array($res)) {
    $libri[] = $row;
}

header("Content-Type: application/json");

echo json_encode($libri);


?>