<?php

// Parametri db
define("HOST", "localhost");    // avrò anche le credenziali di accesso con Aruba (dominio + hosting)
define("USER", "root");         // root username di default
define("PASS", "");             // se nessuna password -> stringa vuota. A volte la password è rootroot
define("DB_NAME", "php2021");

// Procedurale -> funzioni
$connessione = mysqli_connect(HOST, USER, PASS, DB_NAME) or die("Connessione fallita");     // tenta la connessione, die interrompe una istruzione
                                                                                            // if session logged.. die ed exit spaccano istruzione del codice

echo"Siamo connessi";   // echo è un costrutto del linguaggio -> no tonde. Esiste print: funzione che ritorna 1, è più lenta.


// importo gli studenti, un file che contiene un array scalare di studenti. Ad ogni posizione c'è un array con due posti: 0 = nome; 1 = cognome
include "studenti.php"; 

// array scalare, ciclo
// foreach ($studenti as $value) {                                                  // con apici doppi -> interpolazione della variabile 
//     mysqli_query($connessione, "insert into studenti (nome, cognome, anno) values ('".$value[0]."', '".$value[1]."', 2000)") or die("Mannaggia!".mysqli_error($connessione));
//                                                                                 // Ho collegato parte di stringa in modo da riuscire a combinare con una logica php -> una istruzione di insert per n volte. 
// }


// Create = insert into studenti ...

mysqli_query($connessione, "delete from studenti where id < 4");    // dovevo mettere < 5, perchè ho 4 studenti da eliminare

// Retrieve / Read = select * from studenti -> è l'unica query, le altre istruzioni si chiamano update. Query ritornano un result set, le query che ritornano il numero delle affected rows si chiamano update (delete etc). 
$result = mysqli_query($connessione, "select * from studenti");
// Un set è un elenco di risultati, devo usare un ciclo indefinito -> while 
while ($riga = mysqli_fetch_assoc($result)) {   // fetch = prende il risultato dal contenitore $result 
    echo $riga["nome"]."<br>"; 
}



// Update = update studenti set... -nomi dei campi da modificare-
mysqli_query($connessione, "update studenti set anno = 2001 where cognome like '%o'");  // tutti gli studenti il cui cognome finisce con la o


// Delete = delete from studenti where id = ...
// return il numero delle righe eliminate. Essendo query return un boolean















// Oggetti -> oggetto connessione










?>