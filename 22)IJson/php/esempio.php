<?php

/*

Un file JSON (JavaScript Object Notation) è un formato di file di testo utilizzato per rappresentare 
dati in un formato leggibile da un computer e da un essere umano. È spesso utilizzato per scambiare 
dati tra un server e un client Web o tra diverse applicazioni.

Un file JSON è costituito da un insieme di coppie di nome/valore, dove il nome è una stringa e il 
valore può essere un altro oggetto JSON, un array, una stringa, un numero, un booleano o null. 
Le coppie di nome/valore sono separate da virgole e sono racchiuse tra parentesi graffe {}. 
Ad esempio, un file JSON che rappresenta un oggetto persona potrebbe avere questo aspetto:

    {
        "name": "Mario",
        "age": 30,
        "city": "Roma"
    }

     In questo esempio, ci sono tre coppie di nome/valore che rappresentano il nome, 
    l'età e la città di una persona.

    Il formato JSON è diventato molto popolare negli ultimi anni, grazie alla sua semplicità 
    e alla sua flessibilità. È supportato da molti linguaggi di programmazione, compreso PHP, 
    e viene comunemente utilizzato per lo scambio di dati tra diverse applicazioni Web.


In PHP è possibile interagire con i JSON utilizzando la funzione json_decode() per decodificare un 
JSON in un array associativo o un oggetto e la funzione json_encode() per codificare un array associativo 
o un oggetto in un JSON. 

Ecco un esempio di come utilizzare queste funzioni:

    // Decodifica un JSON in un array associativo
    $json_string = '{"name": "Mario", "age": 30}';
    $array = json_decode($json_string, true);

    // Accede ai valori dell'array
    echo $array["name"]; // Mario
    echo $array["age"]; // 30

    // Codifica un array associativo in un JSON
    $array = array("name" => "Luigi", "age" => 35);
    $json_string = json_encode($array);

    // Stampa il JSON
    echo $json_string; // {"name":"Luigi","age":35}


    Nell'esempio sopra, viene decodificato un JSON rappresentato da una stringa e viene creato un array 
    associativo. Successivamente, vengono acceduti ai valori dell'array con la notazione a chiave.

    Viene poi mostrato come codificare un array associativo in un JSON utilizzando la funzione json_encode(). 
    Il JSON viene quindi stampato a schermo.

    Le funzioni json_decode() e json_encode() consentono di interagire con i JSON in modo semplice ed 
    efficace in PHP. Tuttavia, è importante prestare attenzione alla sicurezza quando si manipolano dati 
    JSON, in particolare quando si utilizzano dati di input non attendibili.
*/


//Reperire e leggere i file json

/*
$strJsonFileContents = file_get_contents("pokedex.json");
$array = json_decode($strJsonFileContents,true);
echo '<pre>' . var_export($array['pokemon'][0]['name'],true) . '</pre>';

echo json_encode($array);
*/

//Reperire e passare i file al frontend

$richiesta = $_POST["data"];
$strJsonFileContents = file_get_contents("$richiesta.json");
$array = json_decode($strJsonFileContents,true);
echo json_encode($array);
?>