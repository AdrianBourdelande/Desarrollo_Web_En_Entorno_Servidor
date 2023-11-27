<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 1 // Ejercicio 1</title>
</head>
<body>
    <?php
        $alto = rand(5,15);
        echo "Alto: ".$alto."<br>";
        $ancho = rand(5,15);
        echo"Ancho: ".$ancho."<br>";

        for($i=0;$i<$alto;$i++){
            for($j=0;$j<$ancho;$j++){
                echo "* ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>