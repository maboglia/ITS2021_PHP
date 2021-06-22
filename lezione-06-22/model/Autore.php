<?php



class Autore{

    public $id;

    public $nome;

    public function __construct()

    {

//        $this->id=$id;

//        $this->nome=$nome;

    }



    public function __get($name)

    {

        return $this->$name;

    }



    public function __set($name, $value)

    {
        $this->$name = $value;
    }

   public function __toString()

   {
      return $this->id.")".$this->nome;
   } 

    

}
