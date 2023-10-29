<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ejercicios Introducción a PHP // Ejercicio 4</title>
</head>
<body>
    <h3> Realiza un programa que nos diga cuántos dígitos tiene un número aleatorio entre (0 y 9999). 
        <br>Mostrar el número y la cantidad de dígitos.</h3>
    <?php 
        $random_number = rand(0,9999);
        echo"El número es <b>$random_number </b>";
        for($random_number, $counter=0;$random_number!=0;$random_number=intdiv($random_number,10),$counter++){
            
            // echo "$random_number"."<br>"."$counter"."<br>";
            
        }
         echo"y este número tiene <b>$counter</b> digitos";
    ?>
</body>
</html>