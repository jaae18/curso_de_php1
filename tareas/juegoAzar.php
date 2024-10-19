<!DOCTYPE html>
<html>
<head>
    <title>Master Mind</title>
    <link rel="stylesheet" href="cssStyle.css">
</head>
<body>
    
    <h1 azul>Juego Master Mind</h1>
    <h1>Consiste en adivinar los colores que el computador ha seleccionado Aleatoriamente</h1>

    <h2>Quiere jugar, coloque los numeros correspondientes a los colores ??</h2>
      
        <div class="color-square azul">AZUL</div>
        <label for="color1"> 1</label>
        <div class="color-square rojo">ROJO</div>
        <label for="color2"> 2</label>
        <div class="color-square negro">NEGRO</div>
        <label for="color3"> 3</label>
        <div class="color-square verde">VERDE</div>
        <label for="color4"> 4</label>
        <div class="color-square amarillo">AMARILLO</div>
        <label for="color5"> 5</label>

    <form  method="post" action="">
       
            <label for="num1">Primer color</label>
            <input type="number" name="num1"><br>
            <label for="num2">Segundo color:</label>
            <input type="number" name="num2"><br>
            <label for="num3">Tercer color:</label>
            <input type="number" name="num3"><br>
            <br>
            <br>
                       
            <input type="submit" name= "Enviar"  value="Adivino" >
           
          
     </form>
     
     <?php

    if (isset($_POST['Enviar']) &&  !(empty($_POST["num1"]))) 
       {
      
        $color_pc=[];
        $color_user= [];

        for ($i=0;$i<3;$i++)
        {
            $aleatorio=rand(1,5);
        
            while (in_array($aleatorio,$color_pc )) 
              { 
                $aleatorio=rand(1,5);
              }
                    
            $color_pc[$i]= $aleatorio ; 
            
        }
       

        echo '<br>';
    
        
            $color_user= array_values($_POST);
            $contAdivinocolor=0;
            $contAdivinoposicion=0;
            
            foreach ($color_pc as $posicion => $color) {
                if (in_array($color,$color_user)) {
                    $contAdivinocolor++;
                }
                foreach ($color_user as $posicion2 => $color2) {
                    if ($color==$color2){
                        if ($posicion==$posicion2){
                            $contAdivinoposicion++;
                        }
                    }
                }
            }
            if ($contAdivinocolor == 3 && $contAdivinoposicion == 3){
                echo "Usted ha ganado";
            }

            else {
                echo '<br>';
                echo "Usted ha acertado $contAdivinocolor colores. ";
                echo '<br>';
                echo  "Usted ha acertado $contAdivinoposicion posiciones. ";
            }
            

            //     foreach ($color_user as $x){
            //         if (in_array($x,$color_pc))
            //             {
            //                 $cont++;        }
            //          }
            // echo '<br>';        
            // echo " acertaste colores " , $cont;
        
            // for ($i=0;$i<3;$i++)
            // {
            //     while ((in_array($color_pc, $color_user)))
            //     { $aleatorio=rand(1,5);
            //     }
            //     $color_user[$i]=$color_pc;
                
            

            // }
            //  echo '<br>' ;
             

            //  echo '<br>';
         
            //      $color_user= array_values($_POST);
            
            //  $posi=0;

            //  foreach ($color_user as $s){
            //     if (in_array($s,$color_pc,$aleatorio))
            //     {
            //         $posi++;
            //     }
            //  }
            //  echo '<br>';

            //  echo " acertaste posiciones " , $posi;
                
       
    }   
?>
       
    
        
       
       <!--  <label><input type="checkbox" name="opcion5"> Verde</label><br>
        <label><input type="checkbox" name="opcion1">Amarillo</label><br>
        <label><input type="checkbox" name="opcion4">Negro</label><br> 
        <label><input type="checkbox" name="opcion3"> Rojo</label><br>
        <label><input type="checkbox" name="opcion2"> Azul</label><br> -->
        

      

 
   
</body>
</html>