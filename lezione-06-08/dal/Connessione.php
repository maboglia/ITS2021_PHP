<?php
include_once './config/db.config.php'; 

class Connessione {//1)creare un oggetto di tipo connessione

    public $con;//3) se è andata bene la connessione questa proprietà la contiene

    public function connetti(){//2 chiamre sull'oggetto creato il metodo connetti()
        try {
            $this->con = new PDO("mysql:host=".Param::HOST.";dbname=".Param::DATA_BASE,Param::USER,Param::PASS);
            
            }catch(PDOException $e){
                
                echo $e->getMessage();
            }
    }
}
?>