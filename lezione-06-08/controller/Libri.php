<?php

include_once './dal/LibroDAO.php';

class Libri {

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







}






?>