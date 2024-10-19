

<!-- // - 4. Un INFLUENCER dispone de una cantidad de euros que quiere repartir a un conjunto de personas.
//   A cada persona le da una cantidad de dinero proporcional a la edad de la misma. 
//   Por ejemplo, si una persona tiene 17 años recibirá € 170 y si tiene 32 años recibirá € 320.
//   Genere la edad de manera aleatoria entre 1 y 100.Escribir un programa que devuelva el número de personas 
//   que podrán recibir una cantidad de dinero. Cuando la cantidad de dinero ya no es suficiente para dársela a
//   una persona, suponemos que no existen más personas y que por tanto el programa finaliza y nos dice cuánto
//   dinero le quedó al INFLUENCER.  -->
   
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejercicio influencer</title>
</head>
<body>
   <form method="post" action="">
      <label for="numero">cuanto dispone el influencer :</label>
      <input type="number" name="cantidad">
      <input type="submit" value="enviar">
   </form>
   <?php

   if (isset ($_POST['cantidad']))
   {
      $monto= $_POST['cantidad'];

      if (empty($monto)){
         echo "monto obligatorio";
      }
      else{
         echo "empieza el reparto", "<br>";

         $edad=rand (1,100);
         $recibe= $edad*10;

         while($monto>$recibe)
         {
            $monto=$monto-$recibe;
            echo "la edad es", $edad, "<br>", "se le dan:", $edad*10, "<br>" ;
            $edad=rand (1,100);
            $recibe=$edad*10;
         }
      }
   }
   ?>
   
</body>
</html>

