<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ejercicios Introducción a PHP // Ejercicio 2</title>
</head>
<body>
    <h3> Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle for.</h3>
    <?php 
        for($counter=320;$counter>=160;$counter=$counter-20){
            echo "$counter"."<br>";
        }
    ?>
</body>
</html>