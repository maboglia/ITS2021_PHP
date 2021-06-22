<?php
// AutoreDao
include_once 'Connessione.php';
include_once './model/Autore.php';


class AutoreDao
{

    private $conn;

    public function __construct()
    {
        $db = new Connessione();
        $db->connetti();
        $this->conn = $db->con;
    }

    public function getAllAutori()
    {
        $autori = [];
        try {
            $result =  $this->conn->query("SELECT * FROM autori");
            $result->setFetchMode(PDO::FETCH_CLASS, "Autore");

            while ($autore = $result->fetch()) {

                $autori[] = $autore;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $autori;
    }

    public function addAutore($nome)
    {
        try {
            $this->conn->query("INSERT INTO autori (nome) VALUES ('$nome') ");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
