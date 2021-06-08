<?php

include_once 'Connessione.php';
include_once './model/Libro.php';


class LibroDAO { //costruisci un oggetto di tipo LibroDAO
    
    private $conn;

    public function __construct()
    {
        $db = new Connessione();
        $db->connetti();
        $this->conn = $db->con;   
    }

    public function getAllLibri()
    {
        $libri = [];
        try{
            $result =  $this->conn->query("SELECT * FROM libri");
            $result->setFetchMode(PDO::FETCH_CLASS , "Libro");

            while($libro = $result->fetch()){
                $libro->prezzo = 10;
                $libri[] = $libro;
                //echo "ID : $libro->id Titolo : $libro->titolo   Prezzo: $libro->prezzo <br>";
            }
        } catch(PDOException $e){
            echo $e->getMessage();
        }
        return $libri;
    }

    public function getLibriByAutore($autore)
    {
        $libri = [];
        try{
            $result =  $this->conn->prepare("SELECT * FROM libri WHERE autori like :autore");

            $autore = "%".$autore."%";

            $result->bindParam(":autore", $autore, PDO::PARAM_STR);
            $result->execute();

            $result->setFetchMode(PDO::FETCH_CLASS , "Libro");

            while($libro = $result->fetch()){
                $libro->prezzo = 10;
                $libri[] = $libro;
                //echo "ID : $libro->id Titolo : $libro->titolo   Prezzo: $libro->prezzo <br>";
            }
        } catch(PDOException $e){
            echo $e->getMessage();
        }
        return $libri;
    }





}










?>