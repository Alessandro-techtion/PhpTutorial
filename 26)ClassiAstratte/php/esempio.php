<?php

/*
    Le classi astratte sono classi che non possono essere istanziate direttamente, ma che vengono utilizzate 
    come modelli per creare altre classi. In altre parole, una classe astratta definisce un'interfaccia comune e 
    le proprietà di base che le sue sottoclassi devono implementare.

    Le classi astratte possono contenere metodi astratti, ovvero metodi che sono dichiarati senza una definizione concreta. 
    Questi metodi devono essere implementati dalle sottoclassi. In questo modo, le classi astratte forniscono un 
    modo per definire un'interfaccia comune per un gruppo di classi simili, senza specificare 
    l'implementazione dettagliata di ogni classe.

    Le classi astratte sono utilizzate per creare gerarchie di classi in cui le classi base definiscono le funzionalità 
    di base comuni a tutte le sottoclassi, mentre le sottoclassi specializzate forniscono implementazioni specifiche per 
    le funzionalità aggiuntive.

    In Java, ad esempio, si può definire una classe astratta utilizzando la parola chiave "abstract" nella dichiarazione 
    di classe. Una classe astratta può contenere metodi astratti, i quali devono essere dichiarati con la parola chiave 
    "abstract" e non possono contenere un'implementazione concreta. Le sottoclassi di una classe astratta devono fornire 
    un'implementazione per tutti i metodi astratti ereditati.
*/

abstract class Persona{
    public $nome;
    public $cognome;

    public function __construct($nome,$cognome)
    {
        $this->nome=$nome;
        $this->cognome=$cognome;    
    }
    abstract function saluta($nome,$cognome);
}


class Insegnante extends Persona{
    public $materia;
    public function __construct($nome,$cognome,$materia){
        $this->nome=$nome;
        $this->cognome=$cognome;
        $this->materia=$materia;
    }
    function saluta($nome,$cognome,$materia="Storia"){
        echo "Buongiorno sono $nome $cognome e insegno $materia ";
    }
}
$insegnante1= new Insegnante("Anna","Bianchi","Storia");
$insegnante1->saluta($insegnante1->nome,$insegnante1->cognome,$insegnante1->materia);
?>