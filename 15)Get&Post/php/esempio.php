<?php

    /*
        In PHP, "GET" e "POST" sono due metodi HTTP utilizzati per inviare dati da un client a un server.

        Il metodo "GET" viene utilizzato per inviare dati tramite la barra degli indirizzi 
        del browser o tramite link ipertestuali. I dati vengono inseriti nella stringa dell'URL 
        come coppie chiave-valore, separate da "&". Ad esempio:

        http://www.example.com?nome=Marco&cognome=Rossi

        In questo esempio, i dati vengono inviati al server utilizzando il metodo "GET". Il server riceve i dati e li elabora per fornire una risposta.

        In PHP, i dati inviati tramite "GET" possono essere recuperati utilizzando l'array superglobale "$_GET". Ad esempio:
        $nome = $_GET['nome'];
        $cognome = $_GET['cognome'];

        In questo esempio, i valori dei parametri "nome" e "cognome" vengono recuperati 
        dall'array superglobale "$_GET".

        Il metodo "POST", invece, viene utilizzato per inviare dati tramite un form HTML. 
        I dati vengono inviati al server e non sono visibili nella stringa dell'URL. Ad esempio:

        <form action="elabora_dati.php" method="post">
            Nome: <input type="text" name="nome"><br>
            Cognome: <input type="text" name="cognome"><br>
            <input type="submit" value="Invia">
        </form>


        In questo esempio, viene definito un form HTML che invia i dati al file "elabora_dati.php" 
        utilizzando il metodo "POST".

        In PHP, i dati inviati tramite "POST" possono essere recuperati utilizzando l'array 
        superglobale "$_POST". Ad esempio:

        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];

        In questo esempio, i valori dei campi "nome" e "cognome" del form vengono recuperati dall'array 
        superglobale "$_POST".

        In generale, il metodo "GET" è più adatto per richiedere dati dal server, mentre il metodo "POST" 
        è più adatto per inviare dati al server. Tuttavia, la scelta del metodo da utilizzare 
        dipende dallo scopo specifico dell'applicazione.

    */

    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    echo "<h1>" . $nome . " " . $cognome . "</h1>";
?>