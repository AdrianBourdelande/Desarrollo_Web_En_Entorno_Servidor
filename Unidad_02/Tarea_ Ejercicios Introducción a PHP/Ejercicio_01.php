<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ejercicios Introducción a PHP // Ejercicio 1</title>
</head>
<body>
    <h3> Muestra los números múltiplos de 5 de un bucle de 0 a 100 utilizando while.</h3>
    <?php 
        $counter=5;
        while($counter<=100){
            
            echo "$counter"."<br>";
            $counter=$counter+5;
        }
    ?>
</body>
</html>