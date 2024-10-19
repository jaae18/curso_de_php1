<?php
// 2. Dado un arreglo con 20 edades de personas, determinar cuántos son niños, 
// jóvenes, adultos y viejos. Se determinan las categorías con base en la siguiente tabla: 
// CATEGORIA EDAD 
// Niños 0 – 13 
// Jóvenes 13 – 29 
// Adultos 30 – 59 
// Viejos 60 en adelante
$Niños=0;
$Jovenes=0;
$Adultos=0;
$viejos=0;

$edades=array(20,5,18,19,60,40,55,12,14,3,34,22,70,7,44,15,17,32,66,3);
var_dump($edades);
echo '<br>', '<br>';


foreach ($edades as $x){
if ($x<=13){
    $Niños++;

} elseif($x<=29){
    $Jovenes++;

} elseif($x<=59){
    $Adultos++;
} else{
    $viejos++;
}
}

echo "cantidad niños:", $Niños;
echo '<br>';
echo "cantidad jovenes:", $Jovenes;
echo '<br>';
echo "cantidad adultos:", $Adultos;
echo '<br>';
echo "cantidad viejos:", $viejos;
?>