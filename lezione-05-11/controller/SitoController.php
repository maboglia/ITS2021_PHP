<?php 

class SitoController  
{
    // proprietà dell'oggetto
    public $pagina;
    // metodo costruttore dell'oggetto
    public function __construct($pagina){
            $this->pagina=$pagina; 


    }
    // metodo custom
    public function prova()
    {
        return 'Benvenuto, ti trovi nella pagina '.$this->pagina;
    }
    public function menuPizza()
    {
        return [
            new Pizza('Margherita',4.50),
            new Pizza('Marinara',3.50),
            new Pizza('Napoli',5.00),
            new Pizza('Prosciutto',5.50)
        ];
    }
}
















?>