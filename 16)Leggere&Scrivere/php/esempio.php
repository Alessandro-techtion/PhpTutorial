<?php

    /*
       La funzione fread in PHP viene utilizzata per leggere dati da un file aperto. 
       Questa funzione prende due argomenti: un identificatore di file ottenuto tramite 
       la funzione fopen e la quantità di byte da leggere dal file. Ecco un esempio base: 

       // Apri il file per la lettura
        $handle = fopen("file.txt", "r");

        // Leggi i primi 10 byte del file
        $data = fread($handle, 10);

        // Chiudi il file
        fclose($handle);

        // Mostra i dati letti
        echo $data;

        In questo esempio, viene aperto il file "file.txt" per la lettura e vengono letti i primi 
        10 byte del file utilizzando la funzione fread. Successivamente, il file viene chiuso 
        utilizzando la funzione fclose e i dati letti vengono mostrati a schermo utilizzando echo.

        È importante tenere presente che la funzione fread leggerà solo fino alla quantità di byte 
        specificata nel secondo argomento, quindi potrebbe essere necessario chiamare questa funzione 
        più volte per leggere l'intero file. Inoltre, è necessario controllare il valore restituito 
        dalla funzione fread per assicurarsi che i dati siano stati letti correttamente e che non ci 
        siano errori di lettura.
    */


    /*
 * 1)Aprire un file con fopen($file,$mode)
 * 
 * 2)Vedere tutte le modalità di apertura file
 *  r = aprire il file solo in lettura
 *  r+ = aprire il file in lettura e scrittura
 *  w = solo scrittura ma elimina il contenuto del file prima di scriverci dentro, se il file non esiste lo crea php
 *  w+ = lettura e scrittura, ma elimina il contenuto del file prima di scriverci dentro, 
 *      se il file non esiste lo crea php
 *  a = append, solo scrittura e preserva il contenuto scrivendo i contenuti nuovi alla fine del file,
 *      se il file non esiste lo crea php
 *  a+ = lettura e scrittura, preserva il contenuto e lo crea in caso non esista
 *  x = solo scrittura. Ritorna FALSE e genera un errore nel caso esista già, in caso contrario lo crea
 *  x+ = lettura e scrittura. Stesse cose di x
 * 
 * 3)Check se il file esiste
 *      if(file_exists($nomeFile)){
 *          $ref=fopen($nomeFile,"r");
 *      }
 * In genere il controllo lo si fa solo per r e x
 * 
 * 4)Chiudere un file
 *  fclose($ref)
 * 
 * 5)Leggere un file con fread($file,$quantoLeggere), readFile($file) oppure file_get_contents($file) senza aprire
 * 6)Scrivere in un file con fwrite($file,$data) o file_put_contents($file,$data) senza aprire
 * 7)Rinominare file con rename($file,$nome)
 * 8)Eliminare un file con unlink($file)
 */

    
    
    $nomeFile="note.txt";//Questo non è il file in se ma solo il nome
    $testo=" Ciao sono una frase da inserire nel file di testo ";
    //Controlla se il file esiste già
    if(file_exists($nomeFile)){//se esiste già un file chiamato $nomeFile
        //Apertuta file
        $file = fopen($nomeFile,"r");

        $content=fread($file,filesize($nomeFile));//Legge tutto il contenuto del file
        echo $content;

        //Scrivere su un file
        //fwrite($file,$testo);

        //Chiudiamo il file
        fclose($file);
    }else{
        echo "Il file non esiste";
    }

    //Rinominare il file
    //rename($nomeFile,"nuovaNote.txt");

    //Eliminare un file
    //unlink($nomeFile);
    

    

?>