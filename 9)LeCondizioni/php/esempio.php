<?php
    const ACAPO= "<br>";
    //If Else
    $is_online=true;

    if($is_online==true){
        echo "<h1>è online!</h1> ";
    }else{
        echo "<h1>è offline</h1>";
    }

    $numero=0;
    if($numero<0){
        echo "<h1>il numero è negativo</h1>";
    }elseif($numero>0){
        echo "<h1>il numero è positivo</h1>";
        if($numero%2==0){
            echo "<h2>Il numero è pari</h2>";
        }else{
            echo "<h2>Il numero è dispari</h2>";
        }
    }else{
        echo "<h1>il numero è 0</h1>";
    }


    //Lo Switch
    $numero=5;
    switch($numero){
        case 0:
            echo "<h1>Il numero è 0</h1>";
        break;
        case 1:
            echo "<h1>Il numero è 1</h1>";
        break;
        case 2:
            echo "<h1>Il numero è 2</h1>";
        break;
        case 3:
            echo "<h1>Il numero è 3</h1>";
        break;
        default:
            echo "<h1>Il tuo numero non è tra questi";
    }
?>