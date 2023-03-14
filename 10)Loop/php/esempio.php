<?php

    /**
     * loop
     */
for($i=0;$i<5;$i++){
    echo $i . "<br>";
}

$persona=[
    "nome" => "Simone",
    "eta" => 31, 
    "cognome" => "Rossi"
];

foreach($persona as $chiave => $valore){
    echo $valore . "<br>";
}

$i=0;
echo "<br><br>Ciclo while <br>";
while($i<5){
    echo "Valore di i: " . $i ."<br>";
    $i++;
}

$i=6;
echo "<br><br>Ciclo do while <br>";
do{
    echo "Valore di i: " . $i . "<br>";
    $i++;
}while($i<5);
//Nonostante la i sia maggiore di 6 entra comunque una volta nel ciclo


//break and continue
for($i=0; $i<10;$i++){
    
    if($i==7){
        break;//Quando si arriverà a 7 rompi il ciclo
    }
    if($i==4){
        continue;//Quando arriverà a 4, salta le istruzioni sotto e va avanti
    }
    echo "<h3>" .$i . "</h3><br>";
}

?>

<h1>Una lista con i loop</h1>
<ul>
    <?php for ($i=1;$i<6;$i++) : ?>
        <li>List Item <?php echo $i ?></li>
    <?php endfor;?>
</ul>