<?php

/*
Per caricare un file in PHP, è possibile utilizzare la funzione move_uploaded_file(). 
Questa funzione consente di spostare un file temporaneo (generato dal server dopo l'upload) 
in una posizione definitiva nel server.

Ecco un esempio di come utilizzare la funzione move_uploaded_file() per caricare un file:

<?php
    $target_dir = "uploads/"; // cartella in cui caricare il file
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // percorso completo del file da caricare
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // estensione del file
 
    // Controlla se il file è una immagine
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "Il file è una immagine - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Il file non è una immagine.";
            $uploadOk = 0;
        }
    }
 
    // Controlla se il file esiste già
    if (file_exists($target_file)) {
        echo "Il file esiste già.";
        $uploadOk = 0;
    }
 
    // Controlla la dimensione del file
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Il file è troppo grande.";
        $uploadOk = 0;
    }
 
    // Controlla il formato del file
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sono permessi solo file JPG, JPEG, PNG e GIF.";
        $uploadOk = 0;
    }
 
    // Se non ci sono errori, carica il file
    if ($uploadOk == 0) {
        echo "Il file non è stato caricato.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Il file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " è stato caricato con successo.";
        } else {
            echo "Si è verificato un errore durante il caricamento del file.";
        }
    }


    In questo esempio, il file viene caricato utilizzando un form HTML che contiene un campo di tipo "file". 
    Quando il form viene inviato, il file viene inviato al server e salvato temporaneamente nella cartella 
    temporanea del server.

    Successivamente, il codice controlla il file per assicurarsi che rispetti determinati requisiti 
    (dimensione, formato, esistenza, etc.) e, se tutto è a posto, il file viene spostato dalla cartella 
    temporanea alla cartella definitiva utilizzando la funzione move_uploaded_file().

    Il percorso completo del file da caricare viene creato concatenando il nome della cartella di destinazione 
    con il nome del file originale, che viene recuperato dalla variabile $_FILES["fileToUpload"]["name"].
?>
*/

//Andiamo a verificare se la richiesta del metodo è "POST"
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //Verifichiamo che il file esista e che non abbia prodotto errori
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"]==0){
        $estensioni_permesse=array("jpg"=>"image/jpg","jpeg"=>"image/jpeg","gif"=>"image/gif","png"=>"image/png");
        //Prendiamo le informazioni della foto
        $nome_file=$_FILES["photo"]["name"];
        $tipo_file=$_FILES["photo"]["type"];
        $dimensione_file=$_FILES["photo"]["size"];

        //Verifichiamo estensioni del file
        $estensione=pathinfo($nome_file, PATHINFO_EXTENSION);
        if(!array_key_exists($estensione,$estensioni_permesse)) die("Errore: Seleziona un formato valido");

        //Verifichiamo la grandezza del file
        $dimensione_massima= 5*1024*1024;
        if($dimensione_file>$dimensione_massima) die("Errore: la grandezza è superiore al limite di 5mb");


        //Verifichiamo il tipo di MIME
        if(in_array($tipo_file, $estensioni_permesse)){
            //Se il tipo del file si trova in estensioni permesse

            //Controlla se il file esiste già
            if(file_exists("upload/" . $nome_file)){
                echo $nome_file . " esiste già";
            }else{
                //Ci sposta il file nella cartella
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $nome_file);
                echo "Il tuo file è stato caricato con successo";
            }
        }else{
            echo "Errore: c'è stato un problema con il caricamento del tuo file, riprova";
        }
    }else{
        echo "Errore " . $_FILES["photo"]["error"];
    }
}
?>