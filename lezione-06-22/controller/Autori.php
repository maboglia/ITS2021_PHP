<?php 
// autori.php

include_once './dal/LibroDAO.php';
include_once './dal/AutoreDAO.php';

class Autori{
    public function init()
    {
        $autori = new AutoreDAO();
        $libri = new LibroDAO();
        $elencoAutori = $libri->getAutori();
        foreach ($elencoAutori as $autore ) {
            print_r($autore->autori);
            $autori->addAutore($autore->autori);
        }
        // echo "<pre>"; // preformatta
        // // var_dump($elencoAutori);
        // print_r($elencoAutori);
        // echo "</pre>";
    }

    public function autoriJson()
    {
        $autori = new AutoreDAO();
        $elencoAutori = $autori->getAllAutori();

        header("Content-Type: application/json");
        echo json_encode($elencoAutori);

    }

    public function clientJS()
    {
        include './view/clientJS.html';
    }



}





?>