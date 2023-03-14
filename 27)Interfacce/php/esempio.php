<?php

    /*  
        Le interfacce in PHP sono un meccanismo che consente di definire un'interfaccia comune per un gruppo di classi. 
        In sostanza, un'interfaccia PHP definisce un insieme di metodi che le classi che implementano quell'interfaccia 
        devono fornire.

        Le interfacce in PHP vengono definite utilizzando la parola chiave "interface" seguita dal nome dell'interfaccia e 
        dalle parentesi graffe che contengono la lista dei metodi che devono essere implementati. 
        Ad esempio:
        
        interface Animale {
            public function respira();
            public function mangia($cibo);
        }

        In questo esempio, viene definita un'interfaccia "Animale" che contiene due metodi, "respira" e "mangia". 
        Le classi che implementano questa interfaccia devono fornire un'implementazione concreta per questi due metodi.

        Per implementare un'interfaccia in PHP, una classe deve utilizzare la parola chiave "implements" seguita dal nome 
        dell'interfaccia. Ad esempio:

        class Cane implements Animale {
            public function respira() {
                echo "Il cane respira.";
            }
            public function mangia($cibo) {
                echo "Il cane mangia $cibo.";
            }
        }

        In questo esempio, viene definita una classe "Cane" che implementa l'interfaccia "Animale". La classe fornisce 
        un'implementazione concreta per i due metodi dell'interfaccia, "respira" e "mangia". La classe "Cane" è ora in grado 
        di essere utilizzata ovunque l'interfaccia "Animale" venga utilizzata.

        Le interfacce in PHP consentono di definire un'interfaccia comune per le classi che forniscono funzionalità simili, 
        ma che possono essere implementate in modo diverso. Ciò facilita la creazione di librerie di classi in cui le classi 
        possono essere facilmente sostituite l'una con l'altra, purché implementino l'interfaccia comune definita.
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
    
    
    class Insegnante extends Persona implements entità{
        public $materia;
        public function __construct($nome,$cognome,$materia){
            $this->nome=$nome;
            $this->cognome=$cognome;
            $this->materia=$materia;
        }
        function saluta($nome,$cognome,$materia="Storia"){
            echo "Buongiorno sono $nome $cognome e insegno $materia ";
        }

        public function cade_a_terra()
        {
            echo "toonff!";
        }
    }


    abstract class Telefono{
        
    }
    class Iphone extends Telefono implements entità{
        public function cade_a_terra()
        {
            echo "Crrrash!";
        }
    }

    interface entità{
        public function cade_a_terra();
    }
?>