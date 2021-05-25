<?php include 'db/connessione.php'; ?>

<?php include 'view/header.php'; ?>

<!--contenuto dinamico-->


<?php

$pagina = "home";

if (isset($_GET['p'])){

    switch ($_GET['p']) {
        case 'add':
            include 'view/add.php';
            break;
        case 'list':
        include 'view/list.php';
        break;
        case 'detail':
        if (isset($_GET['idPlayer'])){
            include 'view/detail.php';
        }
        break;
        
        default:
            include 'view/home.php';
            break;
    }





} else {
    include 'view/home.php';
}



?>



<?php include 'view/footer.php'; ?>