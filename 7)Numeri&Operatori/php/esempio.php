<?php
    /**
     * 1) interi is_int()
     * 2) float is_float()
     * 3) numeri vs numeri stringhe is_numeric()
     * 4) NaN is_nan()
     * 5) cast da stringhe a numeri (int)$stringa
     * 6) abs(), min(), max(), sqrt(), round(), rand()
     * 7) operatori + - * / % **
     * 8) operatori di assegnazione += -= /= *=
     * 9) incremento e decremento $x++ $x--
     */

     $operatore1=3;
     $operatore2=5.10;
     $operatore3='10';

     var_dump(is_int($operatore1)); //restituisce true se la variabile contiene un int

     echo "<br>" . "Operazione tra un int e un float " . $operatore1 + $operatore2;

     echo "<br>" . "Operazione tra un int e una stringa che però contiene un numero " . $operatore1 + $operatore3;
    /**
     * In questo caso non fa una concatenazione come su javascript
     * ma si rende conto che contiene un numero e casta la stringa in int
     * casta= conversione di tipo
     */

     /**
      * Castare una variabile manualmente 
      * $operatore3 = (int)'10'
      */

      echo "Trovare il numero più piccolo tra una serie di numeri ". min(0,23,54,38,-10);
      echo "<br> Trovare il numero più grande tra una serie di numeri ". max(0,23,54,38,-10);

      echo "<br> Arrontondamento ". round(11.6);

      echo "<br> Generare un numero random tra 0 e 100 ". rand(0,100);
?>