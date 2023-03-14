<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I Json</title>
</head>
<body>

    <!-- Da rivedere -->
    <script>
        let formData=new FormData();
        FormData.append('data','pokedex');

        fetch('esempio.php',{
            method: 'POST',
            body: FormData
        })
        .then(response=>response.json())
        .then(data=>console.log(data));
    </script>
</body>
</html>