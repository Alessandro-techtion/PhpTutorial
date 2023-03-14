<?php

    //string
    $nome='Luca';
    //int
    $eta=23;
    //float
    $temperature=36.07;
    //bool
    $is_online=true;
    //array
    $interessi=['calcio','basket','cinema'];
    //nullable
    $fidanzata=null;

    var_dump($fidanzata);//var_dump server per stampare il tipo di variabile
    echo "<br>";
//Oggetto
/**
 * Un oggetto è una rappresentazione di qualcosa che esiste nella realtà, di generico
 */    
class Persona{
    public $nome;
    public $cognome;

    public function __construct($nome,$cognome)
    {
        $this->nome=$nome;
        $this->cognome=$cognome;
    }
}

//Stiamo istanziando un oggetto di tipo Persona 
$persona1= new Persona('Matteo','Bianchi');

var_dump($persona1);


?>