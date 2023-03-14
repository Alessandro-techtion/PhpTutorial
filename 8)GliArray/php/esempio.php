<?php
    const ACAPO="<br>"; 
     //Un array è una collezione di elementi

    //Creare un array
    $citta=['Milano','Firenze','Roma'];

    //Creare un array - Metodo 2
    $nomi=array('Alessandro','Marco',"Eleonora",'Federico');

    //Accedere a un elemento in un array
    echo $citta[0] . ACAPO;

    //Modificare un elemento
    $nomi[1]='Mattia';

    //Stampare in una volta i valori dell'array
    for($i=0;$i<count($citta);$i++){//count conta da quanti elementi è formato l'array
        echo ACAPO ."Il valore contenuto all'indice " . $i . " è: " . $citta[$i] . ACAPO;
    }

    //Array associativi - Key/Value
    /**
     * Sono degli array dove al posto di avere degli indici di default
     * Andiamo a definire una chiave dalla quale possiamo ricavare un valore 
     */

    $persona=[
        "nome" => "Luca",
        "cognome" => "Rossi", 
        "eta" => 25,
        12 => "Dodici"
    ];
    //Per accedere al nome della persona:
    echo ACAPO . $persona["nome"];
    //Per modificarlo
    $persona["nome"]="Antonio";
    echo ACAPO . $persona["nome"];

    echo ACAPO;
    //Mandare a schermo un array associativo
    foreach($persona as $chiave=>$valore){//Per ciascun elemento di persona identificato come chiave valore
        echo $chiave . " => " . $valore . "<br>";//Mi mandi a schermo la chiave e il valore
    }

    //Array multidimensionali, sono array che contengono altri array
    $classi = [
        ["Luca","Marco","Anna"],//riga 0, con 2 colonne
        ["Andrea","Sofia","Daniele","Paolo"]//riga 1 con 3 colonne
    ];
    
    //Accedere ai dati contenuti in un array multidimensionale
    echo "<br> Array multidimensionale: ". $classi[0][1] . "<br>";
    
    //Scorrere i dati di un array multidimensionale
    //Sono 2 for insestati tra loro
    for($classe=0; $classe<count($classi);$classe++){
        echo "Classe: " . $classe . "<br>";
        for($alunno=0; $alunno<count($classi[$classe]);$alunno++){
            echo $classi[$classe][$alunno] . "<br>";
        }
        /**
        * Il primo for è per le rige 
        * Il secondo for è per le colonne
        */
    }
    
    echo ACAPO;
    //Ordinare gli Array
    sort($citta);//Ordina gli elementi dell'array in ordine alfabetico
    print_r($citta);//Stampa il contenuto dell'array (DIVERSAMENTE DA COME FA IL FOR)

    echo ACAPO;
    //Ordinare gli array Associativi
    ksort($persona);
    print_r($persona);

    echo ACAPO;
    //Aggiungere elementi agli array
    $lettera=['B','C','D'];
    array_push($lettera,'E');//è stata aggiunta la lettera E
    print_r($lettera);

    echo ACAPO;
    //Togliere l'ultimo elemento
    array_pop($lettera);
    print_r($lettera);

    echo ACAPO;
    //Aggiungere un elemento davanti all'array
    array_unshift($lettera,'A');//è stata aggiunta la lettera a
    print_r($lettera);

    echo ACAPO;
    //Togliere il primo elemento all'array
    array_shift($lettera);
    print_r($lettera);
?>