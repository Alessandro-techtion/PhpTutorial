<?php
    /**
     * In PHP, è possibile includere file esterni all'interno di un file utilizzando le funzioni 
     * "include" e "require". L'inclusione di file esterni è utile quando si desidera riutilizzare 
     * lo stesso codice in più parti del progetto o quando si desidera separare il codice in 
     * file diversi per una migliore organizzazione.
     * La funzione "include" consente di includere un file esterno all'interno di un altro file, 
     * senza interrompere l'esecuzione dello script in caso di errore. Ad esempio:
     * 
     * include "file_esterno.php";
     * 
     * In questo esempio, viene incluso il file "file_esterno.php" all'interno del file corrente. 
     * Se il file esterno non viene trovato, viene visualizzato un messaggio di avviso ma l'esecuzione 
     * del programma continua.
     * La funzione "require", invece, ha lo stesso scopo di "include", ma interrompe 
     * l'esecuzione dello script in caso di errore, rendendola più robusta. Ad esempio:
     * 
     * require "file_esterno.php";
     * 
     * In questo esempio, viene incluso il file "file_esterno.php" all'interno del file corrente, 
     * ma se il file esterno non viene trovato, viene generato un errore fatale e l'esecuzione dello 
     * script viene interrotta.
     * Inoltre, esistono anche le funzioni "include_once" e "require_once", che sono simili a "include" 
     * e "require", ma verificano se il file è già stato incluso in precedenza. In questo modo, 
     * è possibile evitare di includere lo stesso file più volte nello stesso script.
     *
     * include_once "file_esterno.php";
     *
     * In questo esempio, viene incluso il file "file_esterno.php" solo se non è già stato incluso 
     * in precedenza.
     *
     * Infine, è possibile utilizzare anche il percorso assoluto per includere file esterni, 
     * in modo da evitare problemi di risoluzione dei percorsi relativi. Ad esempio:
     * 
     * include "/percorso_assoluto/file_esterno.php";
     */

     function saluta(){
        echo "ciao dalla funzione";
     }

?>