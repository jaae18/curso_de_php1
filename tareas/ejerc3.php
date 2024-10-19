<?php
// 3. Dado un arreglo con 20 calificaciones de un grupo de alumnos. 
// Calcule y escriba el porcentaje de reprobados.
// Tomando en cuenta que la calificación mínima aprobatoria es de 70. 

$notas=array(70,90,100,92,50,67,40,75,65,93,20,42,71,98,38,63,97,100,82,95);
$aprobados=0;
$reprobados=0;
$suma=0;
$contador=0;

foreach ($notas as $n){

    if ($n>=70){
        $aprobados++;

    }else{
        $reprobados++;
    }
}
foreach ($notas as $n){
    $suma+=$n;
    $contador++;
}
$promedio= $suma/$contador;

echo "cantidad aprobados:", $aprobados;
echo "cantidad reprobados:", $reprobados;
echo "el promedio es:", $promedio;


?>