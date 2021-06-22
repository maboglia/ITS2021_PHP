<?php
session_start();
include_once 'controller/Libri.php';

$controller = new Libri();

//verifico se esiste src e memorizzo il valore di src
$vista =  isset($_GET['src']) ? $_GET['src'] : 'home';

//switch sul valore di $pagina per sapere quale vista caricare: routing
switch ($vista) {
    case 'home':
        $controller->home();
        break;
    case 'logout':
        $controller->logout();
        break;

    case 'addLibro':
        if ($_SESSION['logged']=="Amministratore")
            $controller->addLibro();
        break;


    case 'login':
        if (isset($_POST['username']) && isset($_POST['password']) ){//hai già usato il form di login, quindi controllo i parametri di accesso
            $controller->checkLogin($_POST['username'], $_POST['password']);
        } else {
            $controller->login();//mostra il form di login
        }
        break;
    case 'autore':
        if (isset($_GET['autore'])){//hai già usato il form di ricerca, quindi ritorno i risultati
            $controller->tuttiLibriByAutore($_GET['autore']);
        } else {//mostra il form di ricerca
            $controller->cercaAutore();
        }
        break;
    case 'titolo':
        if (isset($_GET['titolo'])){//hai già usato il form di ricerca, quindi ritorno i risultati
            $controller->tuttiLibriByTitolo($_GET['titolo']);
        } else {//mostra il form di ricerca
            $controller->cercaTitolo();
        }
        break;
    case 'genere':
    $controller->home();
        break;
    default:
    $controller->home();
        break;
}


?>