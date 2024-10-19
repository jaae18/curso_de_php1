<?php

// 1- Dado 20 números en un arreglo, imprimir cuantos son positivos, cuantos negativos y cuantos neutros.
 $numeros20= array (3,8,10,22,0,4,5,12,-10,-2,30,40,-1,-3,13,16,17,18,-19,7);
 var_dump ($numeros20);
function contar_numeros ($numeros20) {
    $positivos=0;
    $negativos=0;
    $neutros=0;

    foreach ($numeros20 as $numeros) {

        if ($numeros>0){
            $positivos++;
        }
        elseif ($numeros<0){
            $negativos++;
        }
        else{
            $neutros++;
        }

    }
    echo "positivos:", $positivos;
    echo "negativos:", $negativos ;
    
    echo "neutros", $neutros;

    
}
contar_numeros ($numeros20);
 
?>