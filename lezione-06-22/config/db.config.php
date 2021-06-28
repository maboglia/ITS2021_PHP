<?php

class Param{
	
	
	
	//p	arametri dell'admin del sito
    public const USERNAME = "admin";
    public const PASSWORD = "12345";

    //parametri per la connessione al db
    // public const HOST = "localhost";
    public const HOST = "Its2020";
    public const USER = "Its2020";
    // public const USER = "root";
    public const PASS = "Its2020";
    // public const PASS = "";
    public const DATA_BASE = "libreria";


    //parametri di configurazione del sito
    public const TITOLO = "Libreria Bogliaccino";
    public const MENU_HR = [ 
        ['home', '?'], 
        ['genere', '?src=genere'], 
        ['autore', '?src=autore'],  
        ['titolo', '?src=titolo'],  
    ];

    

}


?>