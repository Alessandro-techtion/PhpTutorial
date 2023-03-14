<?php

    /**
     * 1)Concatenare stringhe
     * 2)Stringhe e variabili
     * 3)Lunghezza di una stringa strlen($stringa)
     * 4)stringa minuscola strtolower($stringa)
     * 5)stringa MAIUSCOLA strtoupper($stringa)
     * 6)rimuovere spazi bianchi ad inizio e fine stringa trim($stringa)
     * 7)contare le parole str_word_count($stringa)
     * 8)stringa al contrario strrev($stringa)
     * 9)cercare posizione parola in stringa strpos($stringa,$parola)
     * 10)prendere una parte di stringa substr($stringa,$inizio,$lunghezza)
     * 11)sostituire parti di testo str_replace($vecchia,$nuova,$stringa)
     */

     $stringa = "Lorem ipsum dolor sit amet ipsum, consectetur adipiscing elit.";
     $parola="Ciao";
     const ACAPO= "<br>";

     //Concatenare stringhe
     echo $parola . " come va? " . "bene!";

     //lunghezza di una stringa
     echo ACAPO ."Lunghezza stringa" . ACAPO . strlen($stringa);

     //stringa minuscola
     echo ACAPO ."Stringa minuscola". ACAPO . strtolower($stringa);
     
    //stringa MAIUSCOLA
    echo ACAPO ."Stringa MAIUSCOLA".ACAPO . strtoupper($stringa);

    //rimuovere spazi bianchi
    echo ACAPO ."Rimuovi spazi bianchi". ACAPO . trim($stringa);

    //contare le parole str_word_count
    echo ACAPO ."Contare da quante parole è formata la stringa". ACAPO . str_word_count($stringa);

    //Stringa al contrario
    echo ACAPO ."Stringa al contrario". ACAPO . strrev($stringa);

    //Cercare posizione della parola
    echo ACAPO ."Cercare una posizione di una parola". ACAPO . strpos($stringa, 'dolor');

    //Prelevare una parte di stringa
    echo ACAPO ."Prelevare una parte di stringa". ACAPO . substr($stringa,12,5);//Parti da dolor e prendimi 5 caratteri

    //Sostituire una parte di testo
    echo ACAPO ."sostituire una parte del testo" . ACAPO . str_replace('dolor'," Ciao ", $stringa);



?>