<?php

include_once 'controller/Libri.php';

$controller = new Libri();

if (isset($_GET['autore'])){
    $controller->tuttiLibriByAutore($_GET['autore']);

} else {
    $controller->tuttiLibri();

}

//





?>