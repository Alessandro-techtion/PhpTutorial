<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Esempio di una form</h1>
    <form action="./php/esempio.php" method="POST" enctype="multipart/form-data"><!--enctype è essenziale-->
        <label for="fileSelect">Seleziona File</label>
        <input type="file" name="photo" id="fileSelect">
        <input type="submit" value="Carica">
        <p><strong>Sono permessi solo i formati .jpg, .jpeg, .gif, .png con una grandezza massima di 5mb</strong>
    </form>
</body>
</html>