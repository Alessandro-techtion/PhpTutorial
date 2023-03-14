<?php

echo 'Ciao '. $_POST['nome'] . ' ' . $_POST['cognome'];
//echo = mandare a schermo
//il . è per concatenare le stringhe 
//$_POST conterrà la variabile 'nome' presa direttamente dal form
//è POST perchè nel method della form abbiamo messo POST

?>