<?php

 function division( $var1, $var2){
    $resultat = $var1/$var2;
    if($var2 == 0){
        throw new Exception(
            "Division par 0 impossible"
        );
    }

    return $resultat;
 }

 echo division(10,2)
          
?>