<!--
        Il codice Php non può essere scritto in un file .html!
        Tuttavia si può scrivere html in un file .php
-->
<?php
    /*Per scrivere in PHP dovremo aprire il tag
        <?php

        ?>
    */
    
    //Per dichiarare le variabili si usa il simbolo $
    $nome='Sono il $nome ';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintassi di Php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="./php/esempio.php" method="POST">

        <!-- Unire php a html -->
        <label for="nome"><?php echo $nome ?></label>

        <input type="text" name="nome" id="nome" placeholder="Inserire Nome">
        <label for="cognome">Cognome</label>
        <input type="text" name="cognome" id="cognome" placeholder="Inserire cognome">
        <input type="submit" value="Invia i dati">

    </form>
    <p>è vero che 1 è minore di 5?</p>

    <?php if (1<5): ?>
        <p>è vero</p>
    <?php else: ?>
        <p>è falso</p>
    <?php endif; ?>        
</body>
</html>