<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Formularios// Ejercicio 1</title>
</head>
<body>
    <?php 
       $primerNumero = $_REQUEST['primerNumero'];
       $segundoNumero = $_REQUEST['segundoNumero'];
       $suma = $primerNumero+$segundoNumero;
       $resta = $primerNumero-$segundoNumero;
       $multiplicacion = $primerNumero*$segundoNumero;
       $division = round($primerNumero/$segundoNumero, 2);
       echo"
        La suma de ambos números es: ".$suma."<br>";
        echo"
        La resta de ambos números es: ".$resta."<br>";
        echo"
        La multiplicacion de ambos números es: ".$multiplicacion."<br>";
        echo"
        La division de ambos números es: ".$division."<br>";
        
    ?>
</body>
</html>