<?php

    /**
     * In PHP, i valori di tipo "date" rappresentano una data nel formato "yyyy-mm-dd", 
     * dove "yyyy" rappresenta l'anno, "mm" rappresenta il mese e "dd" rappresenta il giorno. 
     * La classe principale per la manipolazione delle date in PHP è "DateTime".
     *
     * Per creare un oggetto "DateTime" con una data specifica, si utilizza il costruttore della classe 
     * e si passa la data come parametro in formato "yyyy-mm-dd". 
     * Ad esempio:
     * 
     * $data = new DateTime("2023-03-03");
     *
     * In questo esempio, viene creato un oggetto "DateTime" che rappresenta la data 3 marzo 2023.
     *
     * Per stampare la data in un formato diverso, si utilizza il metodo "format" dell'oggetto "DateTime" 
     * e si passa una stringa di formattazione come parametro. Ad esempio:
     * $data = new DateTime("2023-03-03");
     * echo $data->format("d/m/Y"); // Output: 03/03/2023
     * 
     * In questo esempio, viene creato un oggetto "DateTime" che rappresenta la data 3 marzo 2023. 
     * La data viene poi stampata nel formato "dd/mm/yyyy" utilizzando la stringa di 
     * formattazione "d/m/Y".
     * 
     * È possibile eseguire operazioni matematiche con le date utilizzando i metodi della classe 
     * "DateTime". Ad esempio, per aggiungere un giorno a una data, si utilizza il metodo "add" e 
     * si passa un oggetto "DateInterval" come parametro.
     * 
     */

     $data=date('d-m-Y',0);
     echo $data;

    /*
     1)UNIX Timestamp parte da Gennaio 1, 1970 00:00:00 GMT (Greenwich Mean Time)
            UNIX Timestamp è uno standard di calcolo del tempo
        2)date() converte timestamp in formato leggibile
        3)parametri di date ($formato,$timestamp)
        4)Spiegazione dei parametri:
            d - numero del giorno
            D - nome del giorno abbreviato
            l - nome completo
            m - numero del mese 
            M - nome del mese 
            y - anno con 2 cifre finali 98,04,15
            Y - anno con 4 cifre 1998,2000,2014
            per separarli possiamo usare - . /

            h - ore in formato da 12 
            H - ore in formato da 24 
            i - minuti
            s - secondi
            a - am e pm in minuscolo
            A - AM e PM in MAIUSCOLO
        5)time() per ottenere il timestamp corrente
        6)mktime(ore, minuti, secondi, mese, giorno, anno) per ottenere timestamp da una data
        7)strtotime(gg-mm-yyyy) da una data leggibile a timestamp
    */

        $date = date('d-m-Y', 0);
        echo $date;
        $date = date('d-m-Y', 18772865);
        echo $date;

        //Dal timestamp possiamo mandare a schermo un formato di data capibile

        $date = date('h:i:sA',278327822);
        echo $date;

        $date = date('d-m-Y H:i:s',time());
        echo $date;

        $date =mktime(14, 49, 00, 02, 12, 2022); //Per ottenere il tampoStamp di questo giorno
        echo $date;

        $date =strtotime('12-02-2021 14:55:00'); //Per ottenere il tampoStamp di questo giorno
        echo $date;

        $date =strtotime('yesterday'); //Per ottenere il tampoStamp di questo giorno
        echo $date;

        $date= date("d-m-Y", strtotime("now" . "+7 days")); //Sommare i giorni
        echo $date;
?>