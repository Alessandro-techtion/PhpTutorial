<?php
    //Per dichiarare una variabile
    $nome=$_POST['nome'];

    /**
     * Variabili SUPER GLOBALI
     * $nome = $_POST['nome'] che ci arriva tramite il form
     * Sono variabili integrate di Php che possiamo usare nel nostro codice
     * 
     * scope delle variabili
     *      -Se noi creiamo una variabile all'interno di una funzione,
     *      il ciclo di vita di quella variabile sarà solo nella funzione
     *      
     *      -E se nel caso noi volessimo accedere a una variabile globale, da dentro la funzione
     *      ci darà errore
     */

    function saluta(){
        echo "Ciao ";
        $nome='Matteo';
        echo 'Ecco il valore della variabile $nome della funzione ' . $nome . '<br>';
    }

    saluta();
    echo 'Ecco il valore della variabile $nome dichiarata fuori dalla funzione ' . $nome . "<br>";

    /**
     * Le variabili anche hanno lo stesso nome che chiamiamo in una funzione, avranno scope differente
     * Se vogliamo cambiare lo scope della variabile dobbiamo andare a fare
     * 
     * function saluta(){
     *  $GLOBALS['nome']='Lo scope della variabile $nome è stato cambiato';
     *  echo $GLOBALS['nome'];
     * }
     * 
     * saluta();
     * echo $nome;
     * 
     * In questo modo avremo la stessa variabile
     * 
     * $GLOBALS['nome'] = La variabile di riferimento è quella globale
     * 
     * Scope locale saranno le variabili create all'interno di una funzione
     */


     //Le costanti in php

     define('INDIRIZZO', 'Piazza Roma ');

     const ADDRESS='Viale Genova';

     echo INDIRIZZO . "<br>";
     echo ADDRESS;

     /**
      * const = una variabile const non può essere definita dentro la funzione 
      */

?>