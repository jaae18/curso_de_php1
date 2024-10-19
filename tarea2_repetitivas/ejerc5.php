

<!-- 5. En una empresa se requiere calcular el salario semanal de cada uno de los n obreros
  que laboran en ella. Los nombres están en un arreglo y Las horas están en otro. (Arreglos paralelas)
El salario se obtiene de la siguiente forma: 
• Si el obrero trabaja 40 horas o menos se le paga Bs. 20 por hora. 
• Si trabaja más de 40 horas se le paga Bs. 20 por cada una de las primeras 40 horas y Bs. 25 por 
cada hora extra. 
Imprime el nombre de cada trabajador y cuánto va a cobrar. -->
<?php
$nombres=array("juan","alberto", "ramon", "angel");
$horas=array(40,120,70,80);

for ($i=0;$i<count($horas);$i++)
{
    if ($horas[$i]<=40)
    {
        $pago= ($horas[$i]*20);
    }
    else{
        ($horas[$i]>40);
        $pago=40*20+ ((($horas[$i]-40)*25));
    }
    echo "el señor:",  $nombres[$i],"<br>","cobrara:", $pago, "<br>";
}
?>