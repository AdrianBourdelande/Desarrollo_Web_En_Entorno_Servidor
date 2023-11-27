<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 1 // Ejercicio 3</title>
</head>
<body>
    <?php
        $primerNumero = $_REQUEST["primerNumero"];        
        $segundoNumero = $_REQUEST["segundoNumero"];
        $op = $_REQUEST["op"];
        if($op=="suma"){
            $operacion = (float)$primerNumero + (float)$segundoNumero;
            echo"El resultado de realizar la suma de los numeros $primerNumero y 
            $segundoNumero es $operacion";
        }
        if($op=="resta"){
            $operacion = (float)$primerNumero - (float)$segundoNumero;
            echo"El resultado de realizar la resta de los numeros $primerNumero y 
            $segundoNumero es $operacion";
        }
        if($op=="producto"){
            $operacion = (float)$primerNumero * (float)$segundoNumero;
            echo"El resultado de realizar el producto de los numeros $primerNumero y 
            $segundoNumero es $operacion";
        }
        if($op=="cociente"){
            $operacion = round((float)$primerNumero / (float)$segundoNumero, 2);
            echo"El resultado de realizar el cociente de los numeros $primerNumero y 
            $segundoNumero es $operacion";
        }
    ?>
</body>
</html>