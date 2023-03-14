<?php

    /*
    
    In PHP è possibile gestire le cartelle (directory) utilizzando diverse funzioni integrate. 
    Ecco alcuni esempi:

    Creare una cartella:
    Per creare una cartella, è possibile utilizzare la funzione mkdir(). 
    Ad esempio, il seguente codice crea una cartella chiamata "cartella_esempio" nella directory 
    corrente:

    <?php
        mkdir("cartella_esempio");
    ?>

    Eliminare una cartella:
    Per eliminare una cartella, è possibile utilizzare la funzione rmdir(). 
    Nota che questa funzione funziona solo su cartelle vuote. Ad esempio, il seguente codice 
    elimina la cartella "cartella_esempio":

    <?php
        rmdir("cartella_esempio");
    ?>

    Verificare se una cartella esiste:
    Per verificare se una cartella esiste, è possibile utilizzare la funzione is_dir(). 
    Ad esempio, il seguente codice verifica se la cartella "cartella_esempio" esiste:

    <?php
        if (is_dir("cartella_esempio")) {
            echo "La cartella esiste.";
        } else {
            echo "La cartella non esiste.";
        }
    ?>
    
    Elenca i contenuti di una cartella:
    Per elencare i contenuti di una cartella, è possibile utilizzare la funzione scandir(). 
    Ad esempio, il seguente codice elenca tutti i file e le cartelle nella cartella "cartella_esempio":

    <?php
        $files = scandir("cartella_esempio");
        foreach ($files as $file) {
            echo $file . "<br>";
        }
    ?>
    
    Questi sono solo alcuni esempi di come è possibile gestire le cartelle utilizzando PHP. 
    Ci sono molte altre funzioni e tecniche disponibili, a seconda delle esigenze specifiche.
    
    */

    $nomeCartella="CartellaProva";
    
    //Verifichiamo che la cartella non esista già, in caso negativo la creiamo
    if(!file_exists($nomeCartella)){
        if(mkdir($nomeCartella)){
            echo "Cartella creata con successo";
        }else{
            echo "Errore in creazione cartella";
        }
    }else{
        echo "La cartella esiste già";
    }


    //Copiare file da un posto all'altro usando copy
    $nomeFile="fileCopiato.txt";
    $nuovoFile=$nomeCartella . "/" . $nomeFile;


    /*
        Se questo file esiste, copialo, prendi il file, e lo copi come nuovo file nella cartella $nuovoFile
    */
    if(file_exists($nomeFile)){
        if(copy($nomeFile,$nuovoFile)){
            echo " file copiato con successo";
        }else{
            echo " Errore in copia file";
        }
    }else{
        echo " il file esiste già";
    }

echo "<br>";
    //Mostrare tutti i file contenuti in una cartella

    function mostraFile($path){
        if(file_exists($path) && is_dir($path)){//Verifichiamo se esiste e se è una cartella
            $result = scandir($path);//Restituisce il contenuto della cartella

            $files=array_diff($result, array('.','..'));//Creiamo un'array dove togliamo al $result i . e .. contenuto nell'array
            //print_r($result);
            //print_r($files);

            if(count($files)>0){ //Dato che $file è un array andiamo a fare un ciclo
                foreach($files as $file){
                    if(is_file("$path/$file")){//Se quello che troviamo è un file
                        echo "$path/$file" . "<br>"; //Lo stampi e crei una nuova riga
                    }elseif(is_dir("$path/$file")){//Se quello che troviamo è una directory
                        mostraFile("$path/$file"); //Andiamo a richiamare se stessa
                    }
                }
            }else{
                echo "Errore: Non sono stati trovati file in questa cartella ";
            }
        }else{
            echo " Errore: La cartella non esiste ";
        }
    }
mostraFile("extra");



/*
La funzione glob() in PHP viene utilizzata per cercare tutti i file che corrispondono ad un 
certo pattern, all'interno di una cartella specifica. Il risultato della funzione è 
un array contenente i nomi dei file che corrispondono al pattern.

Ecco un esempio di come utilizzare la funzione glob():

<?php
    // Cerca tutti i file con estensione .txt nella cartella "documenti"
    $fileList = glob("documenti/*.txt");
 
    // Stampa i nomi dei file trovati
    foreach($fileList as $filename){
        echo "$filename\n";
    }
?>

In questo esempio, la funzione glob() viene utilizzata per cercare tutti i file con estensione 
.txt nella cartella "documenti". Il risultato viene salvato in un array di stringhe chiamato $fileList. 
Successivamente, viene utilizzato un ciclo foreach per stampare i nomi dei file trovati.

È possibile utilizzare diversi caratteri jolly (wildcard) all'interno del pattern passato alla 
funzione glob(). Ad esempio:

: rappresenta qualsiasi sequenza di caratteri
? : rappresenta un singolo carattere
[...] : rappresenta un singolo carattere tra quelli specificati all'interno delle parentesi quadre. 
È possibile specificare un intervallo di caratteri utilizzando il trattino (-).
Ad esempio, il seguente codice cerca tutti i file che iniziano con "documento_" e finiscono con ".docx" 
nella cartella "documenti":

<?php
    // Cerca tutti i file che iniziano con "documento_" e finiscono con ".docx" nella cartella "documenti"
    $fileList = glob("documenti/documento_*.docx");
 
    // Stampa i nomi dei file trovati
    foreach($fileList as $filename){
        echo "$filename\n";
    }
?>

In questo esempio, viene utilizzato il carattere jolly * per rappresentare qualsiasi 
sequenza di caratteri tra "documento_" e ".docx".

*/

echo "<br>" . "<br>";
$files=glob("extra/*.html");
foreach($files as $file){
    echo basename($file) . "(size: " . filesize($file) . " bytes" . "<br>";
}
?>