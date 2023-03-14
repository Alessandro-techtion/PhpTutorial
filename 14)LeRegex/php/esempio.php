<?php

   /**
    * In PHP, le regex (espressioni regolari) sono supportate nativamente e sono utilizzate 
    * per manipolare le stringhe di testo in modo flessibile e potente.
    *
    * Le regex sono definite come pattern di ricerca che descrivono un insieme di stringhe da cercare 
    * all'interno di una stringa più grande. In PHP, le regex sono implementate attraverso la 
    * funzione "preg_match", che cerca una corrispondenza tra il pattern di ricerca e una stringa di testo.
    * 
    * Ecco un esempio di utilizzo di "preg_match":
    *
    * $stringa = "La mela è un frutto molto gustoso";
    *   if (preg_match("/mela/", $stringa)) {
    *       echo "La stringa contiene la parola 'mela'";
    *   } else {
    *       echo "La stringa non contiene la parola 'mela'";
    *   }
    *
    *
    *   In questo esempio, viene definita una stringa di testo e viene utilizzata la funzione "preg_match" 
    *   per cercare la parola "mela" all'interno della stringa. Se viene trovata una corrispondenza, 
    *   viene stampato un messaggio.
    *
    *   Le regex in PHP utilizzano una sintassi particolare per definire i pattern di ricerca. 
    *   Ad esempio, il carattere "/" viene utilizzato per delimitare il pattern di ricerca, mentre 
    *   alcuni caratteri speciali, come ad esempio "*", "?", "+" e ".", vengono utilizzati per specificare 
    *   diversi tipi di corrispondenza tra il pattern di ricerca e la stringa di testo.
    *
    *   Ad esempio, il carattere "*" indica che il carattere precedente può essere ripetuto un numero 
    *   qualsiasi di volte, mentre il carattere "?" indica che il carattere precedente può essere 
    *   presente o assente nella stringa di testo.
    *
    *   Ecco un altro esempio che utilizza una regex più complessa per cercare numeri di 
    *   telefono all'interno di una stringa di testo:
    *    
    * $stringa = "Il mio numero di telefono è 123-456-7890";
    * if (preg_match("/\d{3}-\d{3}-\d{4}/", $stringa)) {
    *       echo "La stringa contiene un numero di telefono";
    *   } else {
    *       echo "La stringa non contiene un numero di telefono";
    *   }
    *
    *
    *   In questo esempio, viene utilizzata una regex per cercare un numero di telefono nel 
    *   formato "xxx-xxx-xxxx". La regex utilizza il carattere "\d" per indicare un qualsiasi 
    *   carattere numerico, mentre "{3}" specifica che il carattere precedente deve essere ripetuto 
    *   esattamente tre volte.
    *
    *   Le regex in PHP possono essere utilizzate in molti modi diversi per manipolare le stringhe 
    *   di testo. Per ulteriori informazioni sulla sintassi delle regex in PHP, si può fare riferimento 
    *   alla documentazione ufficiale di PHP.
    */ 



    $testo="Oggi è una splendida giornata anche se è prevista neve";

    //Match semplice
    $pattern = "/Og[gk]i"; //Io voglio trovare quella parola che comincia con Og, che contenga g o k, e che finisca con i
    if(preg_match($pattern,$testo)){
        echo "Match trovato!";
    }else{
        echo "Match non trovato!";///Og[^gk]i: Trovare una parola che non contenga g o k 
    }

    //[a-Z0-9] dalla a all Z e dallo 0 al 9


    //Classi di caratteri
    $pattern="/è/";
    $matches=preg_match_all($pattern,$testo,$array); //Controlla che nel testo tutte le volte che copare la è
    echo $matches . " match sono stati trovati"; //Ci creerà un array dove andrà a contare quante volte comparirà la è

    //Classi predefinite
    //Sono dei simboli che sono già stati incorporati che ci permettono di non scrivere tutto
    /*
     * \d = [0-9]
     * \D = [^0-9]
     * \s = Matches any whitespace [\t\n\r]
     * \S = Matches any non-whitespace [^\t\n\r]
     * \w = Any word character [a-zA-Z_0-9]
     * \W = [^a-zA-Z_0-9]   
     */

     //Classi predefinite
     $nomeImmagine = "logo brand nero.png";
     $patternSpazi="/\s/";
     $replacement="_";
     echo preg_replace($patternSpazi, $replacement, $nomeImmagine);
     //Troverà gli spazi e li sostituira con _ 


     //Quantificatori
     /*
        p+  trova una o più occorenze della lettera p
        p* trova zero o più occorenze della lettera p
        p? zero o un'occorenza della lettera p
        p{2} trova esattamente 2 occorenze della lettera p
        p{2,3} almeno 2 occorenze di p e al massimo 3
        p{2,} almeno 2 occorenze 
        p{,3} al massimo 3 
     */

    $pattern="/[\s,]+/";
    $text = "My favourite colors are red,green and blue";
    $parts = preg_split($pattern,$text);
    foreach($parts as $part){
        echo $part . "<br>";
    }

    //Ancore
    $pattern = "/^M/";//Trovami tutte le frasi che iniziano con M
    $names=array("Marco Rossi", "Luca Verdi", "Mattia Gialli");
    $matches= preg_grep($pattern,$names);//preg_grep: grep prende gli elementi dell'array che matcha il pattern
     
    //Modificatore di pattern
    /*
     * i
     */
    $pattern = "/^M/i";//la i sta per case insensitive
    $names=array("marco Rossi", "Luca Verdi", "mattia Gialli");
    $matches= preg_grep($pattern,$names);

    //Limiti di una parola
    $pattern='/bcar\w*/';//delimita la parte iniziale, parole che cominciano per car e non importa come finiscano
    $replacement='<b>$0</b>s';
    $text="Words begining with car: cart, carrot, cartoon. Words ending with car, scar,oscar,supercar";
    echo preg_replace($pattern,$replacement,$text);

?>