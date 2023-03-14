<?php

    /*

    In PHP, le sessioni sono una tecnica di gestione dello stato per mantenere le informazioni 
    dell'utente tra le richieste del browser e del server. Le sessioni consentono di conservare 
    informazioni sul server, accessibili a tutte le pagine del sito web, e di identificare un 
    utente attraverso un identificativo univoco, chiamato session ID.

    Ecco come utilizzare le sessioni in PHP:

    Iniziare una sessione: per iniziare una sessione in PHP, è necessario chiamare 
    la funzione session_start(). Questa funzione deve essere chiamata all'inizio di ogni pagina 
    in cui si desidera utilizzare le sessioni.

    Impostare variabili di sessione: una volta iniziata la sessione, è possibile impostare le variabili 
    di sessione utilizzando l'array globale $_SESSION. Ad esempio:

    <?php
        session_start();
        $_SESSION['nome'] = 'Mario';
        $_SESSION['cognome'] = 'Rossi';
    ?>


    In questo esempio, la variabile di sessione $_SESSION['nome'] viene impostata su "Mario" e 
    la variabile di sessione $_SESSION['cognome'] viene impostata su "Rossi".

    Recuperare variabili di sessione: per recuperare le variabili di sessione, è sufficiente accedere 
    all'array $_SESSION. Ad esempio:

    <?php
        session_start();
        echo "Benvenuto, " . $_SESSION['nome'] . " " . $_SESSION['cognome'];
    ?>

    In questo esempio, le variabili di sessione $_SESSION['nome'] e $_SESSION['cognome'] vengono 
    utilizzate per stampare un messaggio di benvenuto.

    Eliminare variabili di sessione: per eliminare una variabile di sessione, è possibile utilizzare 
    la funzione unset(). Ad esempio:

    <?php
        session_start();
        unset($_SESSION['nome']);
    ?>

    In questo esempio, la variabile di sessione $_SESSION['nome'] viene eliminata.

    Terminare la sessione: per terminare una sessione, è possibile utilizzare la funzione 
    session_destroy(). Questa funzione elimina tutte le variabili di sessione e cancella il session ID. 
    Ad esempio:

    <?php
        session_start();
        session_destroy();
    ?>

    In questo esempio, la sessione viene terminata e tutte le variabili di sessione vengono eliminate.

    È importante notare che le sessioni possono essere utilizzate per salvare informazioni sensibili, 
    come le credenziali di accesso dell'utente, quindi è importante implementare misure di sicurezza 
    adeguate, come l'utilizzo di HTTPS e la validazione dei dati di input.


*/


    session_start();

    $_SESSION["user_id"]=23;

    echo $_SESSION["user_id"];

    unset($_SESSION["user_id"]);
    
    echo $_SESSION["user_id"];

    session_destroy();

?>