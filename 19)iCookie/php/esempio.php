<?php 

/*
    In PHP, i cookie sono piccoli file di testo che vengono salvati sul computer dell'utente e contengono 
    informazioni sulla sessione o sulle preferenze dell'utente. I cookie vengono utilizzati per mantenere 
    lo stato della sessione tra le richieste del browser e il server, o per personalizzare l'esperienza 
    dell'utente sul sito web.

    I cookie possono essere impostati utilizzando la funzione setcookie() in PHP. Questa funzione richiede 
    almeno due parametri: il nome del cookie e il valore del cookie. Ecco un esempio di come impostare 
    un cookie in PHP:

    <?php
        // Imposta un cookie che scade tra 7 giorni
        $cookie_name = "user";
        $cookie_value = "John Doe";
        $expiration = time() + (7 * 24 * 60 * 60); // tempo di scadenza (7 giorni)
        setcookie($cookie_name, $cookie_value, $expiration, "/");
    ?>

    In questo esempio, il cookie viene impostato con il nome "user" e il valore "John Doe". 
    Il parametro $expiration viene utilizzato per specificare il tempo di scadenza del cookie, 
    che in questo caso è impostato a 7 giorni. Il parametro "/" indica che il cookie è disponibile 
    in tutto il sito web.

    Per recuperare il valore di un cookie, è possibile utilizzare la variabile globale $_COOKIE. 
    Ad esempio:

        // Recupera il valore di un cookie
        if(isset($_COOKIE['user'])) {
            echo "Benvenuto " . $_COOKIE['user'];
        } else {
            echo "Non hai impostato il tuo nome utente.";
        }

    
    In questo esempio, la variabile globale $_COOKIE viene utilizzata per verificare se il cookie 
    con il nome "user" esiste e, se sì, viene stampato il messaggio di benvenuto con il valore del 
    cookie. Se il cookie non esiste, viene stampato un messaggio di avviso.

    È importante ricordare che i cookie possono essere letti solo dal dominio che li ha impostati e 
    che sono soggetti alle restrizioni imposte dalle impostazioni di privacy del browser dell'utente.
?>

*/


//setcookie("username","Alessandro Terzi", time()+60*60*24*30)

if(isset($_COOKIE["username"])){
    echo $_COOKIE["username"];
}else{
    echo "Nessun cookie disponibile";
}

setcookie("username","", time()-3600);

?>