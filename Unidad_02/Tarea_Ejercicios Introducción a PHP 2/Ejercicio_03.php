<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03</title>
</head>
<body>
    <h3>Realiza un programa que generé 8 números aletorios, los almacene en un vector y que luego 
        muestre esos números de colores, los pares en color azul y los impares en color rojo.</h3>

    <?php
        $numeros_aleatorios = array();
        for($i=0;$i<5;$i++){
            $numeros_aleatorios[$i]=rand(1,10000);
            if($numeros_aleatorios[$i]%2==0){
                echo "<font color='green' size='10'>".$numeros_aleatorios[$i]."</font><br>";
            }else{
                echo "<font color='red' size='10'>".$numeros_aleatorios[$i]."</font><br>";
            }
        }
        
    ?>
</body>
</html>