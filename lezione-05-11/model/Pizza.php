<?php 

class Pizza
{
  public $nome;
   public $prezzo;
   public function __construct($nome,$prezzo){
   $this->nome=$nome; 
   $this->prezzo=$prezzo;
   }
   public function menu()
   {
       return $this->nome.' : '.$this->prezzo;
   }
}









?>