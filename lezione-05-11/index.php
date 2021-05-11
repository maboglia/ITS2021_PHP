<?php
    include './config/config.php';
    include("./view/header.php"); 

    if(isset($_GET["pagina"])) {
        switch($_GET["pagina"]) {
            case "p1":                
                include("./view/pagina.php");     
                break;

            default:
                include("./view/content.php");
                break;
        }
    }
    else {
        include "./view/welcome.php";
    }

    include("./view/footer.php");
?>