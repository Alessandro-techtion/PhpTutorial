<?php
/*
In programmazione ad oggetti (OOP), le classi rappresentano i modelli o le descrizioni astratte di un 
insieme di oggetti correlati. Una classe contiene le proprietà e i metodi che definiscono il comportamento 
degli oggetti che ne sono istanze.

In una classe, le proprietà rappresentano i dati che vengono mantenuti da ogni istanza dell'oggetto, 
mentre i metodi rappresentano il comportamento dell'oggetto e consentono di manipolare i dati delle proprietà. 
Ad esempio, una classe "auto" potrebbe avere proprietà come "marca", "modello" e "colore", e metodi come "accendi", 
"spegni", "accelera" e "ferma".

Per creare un oggetto a partire da una classe, è necessario eseguire una "istanza" della classe, 
ovvero creare una copia dell'oggetto con i valori specifici per le sue proprietà. Ad esempio, un'istanza 
dell'oggetto "auto" potrebbe essere creata con la marca "Fiat", il modello "500" e il colore "rosso".

In PHP, le classi sono definite utilizzando la parola chiave "class", seguita dal nome della classe. 
Ad esempio:

    class Auto {
        public $marca;
        public $modello;
        public $colore;

        public function accendi() {
            // Codice per accendere l'auto
        }

        public function spegni() {
            // Codice per spegnere l'auto
        }

        public function accelera() {
            // Codice per accelerare l'auto
        }

        public function ferma() {
            // Codice per fermare l'auto
        }
    }

In questo esempio, la classe "Auto" contiene le proprietà "marca", "modello" e "colore", 
e i metodi "accendi", "spegni", "accelera" e "ferma". Per creare un'istanza dell'oggetto "Auto", 
è possibile utilizzare il costruttore della classe:

    $auto1 = new Auto();
    $auto1->marca = "Fiat";
    $auto1->modello = "500";
    $auto1->colore = "rosso";
    $auto1->accendi();

In questo esempio, viene creata un'istanza dell'oggetto "Auto" con la marca "Fiat", il modello "500" e il 
colore "rosso", e viene chiamato il metodo "accendi" per accendere l'auto.    

*/

use Persona as GlobalPersona;

class Persona{
    public $nome;
    public $cognome;
    public $eta;
    private $telefono;

    //Costruttore
    /*
        Il costruttore è un metodo speciale di una classe in linguaggio di programmazione orientato agli oggetti 
        (OOP) che viene chiamato automaticamente quando si istanzia un oggetto di quella classe. Il compito 
        principale del costruttore è quello di inizializzare l'oggetto con i valori di default o con i valori 
        specificati dall'utente.

        Il nome del costruttore di una classe in PHP è sempre "__construct()", che deve essere scritto all'interno 
        della definizione della classe. Quando si crea un nuovo oggetto di quella classe, il costruttore viene 
        chiamato automaticamente e può eseguire il codice necessario per inizializzare l'oggetto.
    */
    function __construct($nome,$cognome)
    {
        $this->nome=$nome;//$this fa semplicemente riferimento alla proprietà $nome della classe
        $this->cognome=$cognome;    
    }

    
    
    //Get e Set
    function set_nome($nome){
        $this->nome=$nome;
    }
    function set_cognome($cognome){
        $this->cognome=$cognome;
    }
    function set_eta($eta){
        $this->eta=$eta;
    }
    function set_telefono($telefono){
        $this->telefono=$telefono;
    }
    function get_nome(){
        return $this->nome;
    }
    function get_cognome(){
        return $this->cognome;
    }
    function get_eta(){
        return $this->eta;
    }
    function get_telefono(){
        return $this->telefono;
    }
    //I getter e i setter in PHP sono metodi utilizzati per accedere e modificare i valori delle proprietà 
    //di una classe.

    //Un metodo getter viene utilizzato per recuperare il valore di una proprietà, mentre un metodo setter 
    //viene utilizzato per impostare il valore di una proprietà.

    //Ecco un esempio di una classe con i metodi getter e setter:

    
    
    //Metodi
    function saluta(){
        echo "<br>Ciao sono $this->nome $this->cognome";
    }
}

$persona1 = new Persona("Alessandro","Terzi");
var_dump($persona1);
$persona1->saluta();


//Modificatori d'accesso

//    In programmazione ad oggetti, i modificatori d'accesso sono parole chiave che indicano il livello 
//    di visibilità di una proprietà o di un metodo all'interno di una classe. In PHP, ci sono tre modificatori 
//    d'accesso principali:
//
//    Public: una proprietà o un metodo pubblico può essere accessibile ovunque, sia dall'interno che dall'
//    esterno della classe. In altre parole, una proprietà o un metodo pubblico può essere utilizzato da qualsiasi 
//    oggetto o istanza della classe.
//    
//    Protected: una proprietà o un metodo protetto può essere accessibile solo all'interno della classe stessa o 
//    dalle sue sottoclassi. Ciò significa che un oggetto esterno non può accedere a una proprietà o a un metodo 
//    protetto.
//    
//    Private: una proprietà o un metodo privato può essere accessibile solo all'interno della classe stessa. 
//    Questo significa che nessun oggetto esterno o sottoclasse può accedere a una proprietà o a un metodo privato.
//    
//    Per impostazione predefinita, le proprietà e i metodi in PHP sono pubblici, il che significa che possono 
//    essere acceduti ovunque. Tuttavia, è una buona pratica utilizzare i modificatori d'accesso per 
//    proteggere le proprietà e i metodi che non dovrebbero essere modificati o utilizzati dall'esterno della classe.
//

$persona1->set_eta(31);
$persona1->set_telefono(3392840238);

echo "<br>" . $persona1->get_cognome();

?>