<?php

//L'ereditarietà è il processo attraverso il quale i geni vengono trasmessi dai genitori ai loro figli. I geni 
//sono unità di informazione ereditaria che si trovano sui cromosomi all'interno del nucleo delle cellule. 
//Essi contengono le istruzioni per la produzione di proteine specifiche che influenzano la crescita, 
//lo sviluppo e il funzionamento di ogni organismo vivente.
//
//I geni sono ereditati in modo casuale dal padre e dalla madre e possono manifestarsi in vari modi nella prole. 
//Ad esempio, alcuni tratti possono essere dominanti, il che significa che il gene sarà espresso se presente 
//in almeno uno dei due genitori. Altri tratti sono recessivi, il che significa che il gene deve essere presente 
//in entrambi i genitori per essere espresso nella prole.
//
//L'ereditarietà può anche essere influenzata dalla presenza di mutazioni genetiche, che sono cambiamenti nel DNA 
//che possono causare variazioni nei tratti ereditari. Queste mutazioni possono essere ereditate dai genitori o 
//possono verificarsi spontaneamente durante la formazione delle cellule riproduttive.
//
//In sintesi, l'ereditarietà è il processo attraverso il quale i geni vengono trasmessi dai genitori alla loro 
//prole e determinano i tratti ereditari degli individui.


class Persona{
    public $nome;
    public $cognome;

    public function __construct($nome,$cognome)
    {
        $this->nome=$nome;
        $this->cognome=$cognome;
    }

    public function saluta(){
        echo "Ciao sono $this->nome $this->cognome";
    }
}

//Un'insegnante è comunque una persona
class Insegnante extends Persona{
    public $materia;
    
    public function __construct($nome,$cognome,$materia){
        $this->nome=$nome;
        $this->cognome=$cognome;
        $this->materia=$materia;

        //In programmazione, l'override si riferisce alla capacità di una classe derivata di sovrascrivere un metodo o una 
        //proprietà ereditati dalla classe base.

        //In pratica, quando una classe derivata eredita un metodo o una proprietà da una classe base, può fornire una 
        //nuova implementazione per quel metodo o quella proprietà utilizzando la stessa firma. 
        //Questa nuova implementazione sostituirà quella ereditata dalla classe base.

        //L'override è un importante concetto di programmazione orientata agli oggetti, in quanto consente di 
        //creare gerarchie di classi che possono estendersi e specializzarsi a vicenda. Ad esempio, una classe base può 
        //definire un metodo generale per eseguire un'operazione, mentre le classi derivate possono fornire 
        //implementazioni più specifiche di quel metodo per soddisfare le loro esigenze specifiche.

        //L'override consente anche di realizzare il polimorfismo, ovvero la capacità di oggetti di classi 
        //diverse di rispondere allo stesso messaggio in modo diverso.
        
    }
    
    function saluta(){
        echo "Buongiorno, sarò la vostra insegnante, mi chiamo $this->nome $this->cognome e insegno $this->materia";
    }
}

$insegnante1= new Insegnante("Giovanna","Rossi","Italiano");
$insegnante1->saluta();
?>