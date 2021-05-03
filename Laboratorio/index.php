<?php 

//includo in questo punto l'intestazione
include "header.php";

$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : "home";

//routing - instradamento
switch ($pagina) {
    case 1:
        include 'page1.php';
        break;
    
    case 2:
        include 'page2.php';
        break;
    
    default:
        # vuoi caricare la home page
        include "home.php";
        break;
}




//includo in questo punto il piedipagina
include "footer.php";



?>