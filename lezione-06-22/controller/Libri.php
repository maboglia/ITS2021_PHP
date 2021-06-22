<?php

include_once './dal/LibroDAO.php';

class Libri {

    /**
     * Home page del sito
     */
    public function home(){
        include './view/header.php';
        include './view/home.php';
        include './view/footer.php';
    }

    public function login(){
        include './view/header.php';
        include './view/form_login.php';
        include './view/footer.php';
    }

    /**
     * Questa azione permette l'aggiunta di un nuovo libro nel database,
     * qui viene mostrato un form con tutti i campi della tabella libri
     * aggiungendo i valori per i campi 
     * 
     * in un altro metodo del controller raccolgo i dati e creo un oggetto di tipo libro da aggiungere al db
     */
    public function addLibro(){
        include './view/header.php';
        //mostrare il form per aggiungere un nuovo libro
        include './view/form_libro.php';
        include './view/footer.php';
    }

    public function logout(){
        unset($_SESSION['logged']);
        $this->home();
    }
    
    public function checkLogin($user, $pass){
        
        if ($user == Param::USERNAME   && $pass==Param::PASSWORD){
            $_SESSION['logged'] = "Amministratore";
            $this->home();
        } else {
            $this->login();
        }

    }

    public function tuttiLibri(){

        $libri = new LibroDAO();
        $elencoLibri = $libri->getAllLibri();

        include './view/header.php';
        include './view/elencoLibri.php';
        include './view/footer.php';

    }
    public function tuttiLibriByAutore($autore){

        $libri = new LibroDAO();
        $elencoLibri = $libri->getLibriByAutore($autore);

        include './view/header.php';
        include './view/elencoLibri.php';
        include './view/footer.php';

    }
    public function tuttiLibriByTitolo($titolo){

        $libri = new LibroDAO();
        $elencoLibri = $libri->getLibriByTitolo($titolo);

        include './view/header.php';
        include './view/elencoLibri.php';
        include './view/footer.php';

    }

    /**
     * Serve per mostrare la vista col form di ricerca
     */
    public function cercaAutore(){
        include './view/header.php';
        include './view/form_cerca_autore.php';
        include './view/footer.php';

    }
    /**
     * Serve per mostrare la vista col form di ricerca
     */
    public function cercaTitolo(){
        include './view/header.php';
        include './view/form_cerca_titolo.php';
        include './view/footer.php';

    }





}






?>