<?php

/**
 * In PHP, le funzioni sono blocchi di codice riutilizzabili che eseguono un compito specifico e 
 * restituiscono un valore opzionale. Le funzioni sono utilizzate per suddividere il codice in parti 
 * più piccole e gestibili, facilitando la lettura, la manutenzione e la riusabilità del codice.
 *
 * Per definire una funzione in PHP, si utilizza la parola chiave "function" seguita dal nome della 
 * funzione, eventuali argomenti tra parentesi tonde, e il blocco di codice tra parentesi graffe. 
 * Ecco un esempio:
 * 
 *      function saluta($nome) {
 *        echo "Ciao, " . $nome . "!";
 *      }
 * In questo esempio, la funzione "saluta" accetta un argomento chiamato "nome" e restituisce una stringa 
 * di saluto che include il nome. Per richiamare questa funzione, si utilizza il suo nome seguito 
 * dall'argomento tra parentesi tonde:
 * 
 * saluta("Mario");
 * 
 * Le funzioni in PHP possono anche restituire un valore, utilizzando la parola chiave "return". 
 * Ad esempio:
 * 
 * function somma($a, $b) {
 *       return $a + $b;
 *  }
 *
 * $x = 2;
 * $y = 3;
 * $risultato = somma($x, $y); 
 * 
 * 
 *  
 * In questo esempio, la funzione "somma" accetta due argomenti e restituisce la loro somma. 
 * La funzione viene chiamata con due variabili ($x e $y), e il valore restituito viene assegnato alla 
 * variabile $risultato.
 *
 * In PHP, è possibile definire funzioni con argomenti facoltativi, utilizzando il valore predefinito 
 * nell'elenco degli argomenti. Ecco un esempio:
 * 
 *      function saluta($nome = "Mondo") {
 *           echo "Ciao, " . $nome . "!";
 *       }
 *
 *       saluta(); Output: Ciao, Mondo!
 *      saluta("Mario"); Output: Ciao, Mario!
 * 
 */

 $numero1=10;
 $numero2=20;

 function somma($valore1,$valore2){
    return $valore1 + $valore2;
}

if(somma($numero1,$numero2)>50){
    echo "La somma è maggiore di 50";
}else{
    echo "La somma è minore di 50";
}