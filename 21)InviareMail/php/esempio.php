<?php 
/*

Per inviare email con PHP è possibile utilizzare la funzione mail(). Questa funzione richiede 
tre parametri: l'indirizzo email del destinatario, l'oggetto della mail e il corpo del messaggio.

Ecco un esempio di codice PHP per inviare una mail:

    $to = "destinatario@example.com";
    $subject = "Oggetto della mail";
    $message = "Contenuto della mail";

    $headers = "From: mittente@example.com\r\n";
    $headers .= "Reply-To: mittente@example.com\r\n";
    $headers .= "CC: copia@example.com\r\n";
    $headers .= "BCC: copiaNascosta@example.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    mail($to, $subject, $message, $headers);


    Nell'esempio sopra, l'indirizzo email del destinatario viene assegnato alla variabile $to, 
    l'oggetto della mail viene assegnato alla variabile $subject e il corpo della mail viene assegnato 
    alla variabile $message.

    La variabile $headers viene utilizzata per impostare gli header della mail. In questo esempio, 
    sono impostati l'indirizzo email del mittente, l'indirizzo email di risposta, l'indirizzo email 
    della copia e l'indirizzo email della copia nascosta. Inoltre, è impostata la versione di MIME e il 
    tipo di contenuto della mail.

    Infine, la funzione mail() viene chiamata con i parametri $to, $subject, $message e $headers.

    È importante notare che la funzione mail() può essere soggetta a problemi di sicurezza, come lo spoofing 
    degli indirizzi email del mittente e il phishing. Pertanto, è importante implementare le misure di 
    sicurezza appropriate, come la validazione dei dati di input e l'utilizzo di servizi di autenticazione 
    delle email come SPF e DKIM.
*/

$to = "prova@gmail.com";
$subject="Email di prova";
$from="dame@gmail.com";

$headers='MIME-Versione 1.0" . "\r\n';
$headers.='Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'From: ' .$from."\r\n";


$message='<html><body>';
$message.='<h1 style="color: blue";> Titolo della nostra mail</h1>';
$message.='<p><br>Questa è una mail di prova, inviata automaticamente';
$message.='</body></html>';


if(mail($to, $subject, $message,$headers)){
    echo "La mail è stata inviata con sucesso";
}else{
    echo "errore durante l'invio della mail";
}
?>