<!DOCTYPE html>
<html>
<head>
    <title>carrito</title>
</head>
<body>
    <form method="POST" action="">
       
        <input type="checkbox" value="enrrollado" name="seleccion[]">Enrrollado <br>
        <input type="number" value="0" name="producto1" min="0" placeholder="Cantidad"><br><br>
        <input type="checkbox" value="perro caliente" name="seleccion[]">Perro Caliente <br>
        <input type="number" value="0" name="producto2" min="0" placeholder="Cantidad"><br><br>
        <input type="checkbox" value="tequeño" name="seleccion[]">Tequeño <br>
        <input type="number" value="0" name="producto3" min="0" placeholder="Cantidad"><br><br>
        <input type="checkbox" value="pizza" name="seleccion[]">Pizza <br> 
        <input type="number" value="0" name="producto4" min="0" placeholder="Cantidad"><br><br>
        <input type="checkbox" value="hamburguesa" name="seleccion[]">Hamburguesa <br>
        <input type="number" value="0" name="producto5" min="0" placeholder="Cantidad"><br><br>
        
        <input type="submit" name= "Enviar"  value="comprar" >
    </form>
    <?php



     if (isset($_POST['Enviar'])) 
     {
        

  
        $productos =
        [
            "Enrrollado" =>
            [
                "precio" => 10,
                
            ],
            "Perro"=>
            [
                "precio" => 1,
                
            ],
            "Tequeño" =>
            [
                "precio" => 3,
                
            ],
            "Pizza" =>
            [
                "precio" => 15,
                
            ],
            "Hamburguesa" =>
            [
                "precio" => 5,
                
            ]
        ];
    
        $suma=0;
        
        if (isset($_POST['seleccion'])) {
            
        
        
       foreach ($_POST['seleccion'] as $seleccion) {
            switch ($seleccion) {
                case 'enrrollado':
                    $suma+=$_POST['producto1'] * $productos['Enrrollado']['precio'];
                    break;
                case 'perro caliente':
                    $suma+=$_POST['producto2'] * $productos['Perro']['precio'];
                    break;
                case 'tequeño':
                    $suma+=$_POST['producto3'] * $productos['Tequeño']['precio'];
                    break;
                case 'pizza':
                    $suma+=$_POST['producto4'] * $productos['Pizza']['precio'];
                    break;
                case 'hamburguesa':
                    $suma+=$_POST['producto5'] * $productos['Hamburguesa']['precio'];
                    break;
                
            }
       }
    }
     
        echo "Total a Pagar, $suma" . '<br>';
    }
    
    
    ?>
</body>
</html>




<!-- //    foreach ($productos as $x ) {
    
    //         if ($productos=="Enrrollado" ) {  $suma+=$productos["precio"];}
    //         if ($productos=="Enrrollado" ) {  $suma+=$productos["precio"];}
    //         if ($productos== "opcion2" ){  $suma+=$x["precio"];}
    //         if ($productos== "opcion3") {  $suma+=$x["precio"];}
    //         if ($productos== "opcion4") {  $suma+=$x["precio"];}
    //         if ($productos== "opcion5"){  $suma+=$x["precio"];}
            
    //         // if ($parametro== "opcion1" ) {  $suma+=$precios[0];}
    //         // if ($parametro== "opcion2" ){  $suma+=$precios[1];}
    //         // if ($parametro== "opcion3") {  $suma+=$precios[2];}
    //         // if ($parametro== "opcion4") {  $suma+=$precios[3];}
    //         // if ($parametro== "opcion5" ){  $suma+=$precios[4];}
                       
    //     // } -->