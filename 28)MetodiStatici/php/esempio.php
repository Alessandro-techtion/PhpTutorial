<?php

    /*
        In programmazione orientata agli oggetti, le proprietà e i metodi statici sono proprietà e metodi di classe che 
        possono essere chiamati senza creare un'istanza della classe stessa.

        Le proprietà statiche sono delle variabili che appartengono alla classe e non alle sue istanze. 
        Questo significa che tutte le istanze della classe condividono la stessa proprietà statica. 
        Le proprietà statiche vengono dichiarate utilizzando la parola chiave "static" all'interno della classe. 
        Ad esempio:
            
        class Contatore {
            public static $count = 0;

            public function __construct() {
                self::$count++;
            }
        }
        

        In questo esempio, viene definita una classe "Contatore" che ha una proprietà statica "$count" che conta il 
        numero di istanze della classe create. La proprietà statica viene incrementata ogni volta che 
        viene creato un nuovo oggetto della classe.

        I metodi statici sono metodi che appartengono alla classe e non alle sue istanze. Questo significa che i metodi 
        statici possono essere chiamati direttamente dalla classe, senza dover creare un'istanza della classe. 
        I metodi statici vengono dichiarati utilizzando la parola chiave "static" all'interno della classe. 
        Ad esempio:

        class Math {
            public static function add($a, $b) {
            return $a + $b;
            }
        }

        In questo esempio, viene definita una classe "Math" che ha un metodo statico "add" che esegue la somma di 
        due numeri passati come argomenti.

        Le proprietà e i metodi statici sono utili per creare funzionalità che appartengono alla classe e non alle sue istanze. 
        Ciò significa che possono essere chiamati in modo più efficiente e senza dover creare un'istanza della classe, 
        il che può essere utile per le funzioni di utilità o per le classi che non hanno bisogno di 
        mantenere lo stato interno. Tuttavia, bisogna fare attenzione a non abusare delle proprietà e dei metodi statici, 
        in quanto possono rendere il codice meno flessibile e difficile da testare.

    */

    class Persona{
        static $conteggio=0;
        public $nome;
        public $cognome;

        function __construct($nome,$cognome)
        {
            $this->nome=$nome;
            $this->cognome=$cognome;
            Persona::$conteggio++;
        }
        static function prova(){
            echo Persona::$conteggio . "<br>";
        }
    }

    $persona1= new Persona("Luca","Rossi");
    $persona2= new Persona("Marta","Bianchi");
    $persona1->prova();
    $persona2->prova();
?>