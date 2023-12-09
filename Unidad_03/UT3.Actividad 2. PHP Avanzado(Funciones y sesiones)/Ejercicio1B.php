<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Funciones y sesiones// Ejercicio 1</title>
</head>
<body>
<?php 
        function seleccionarMayor($x, $y, $z){
            
            if($x>$y&&$x>$z){
                return $x;
            }
            if($y>$x&&$y>$z){
                return $y;
            }
            if($z>$y&&$z>$x){
                return $z;
            }
            return $orden;
        }

        $primerNumero = $_REQUEST['primerNumero'];
        $segundoNumero = $_REQUEST['segundoNumero'];
        $tercerNumero = $_REQUEST['tercerNumero'];
        $numeroMayor= seleccionarMayor($primerNumero, $segundoNumero, $tercerNumero);
       
       
        echo"el número mayor de los tres es ".$numeroMayor."<br>";
        
    ?>
    <a href="./Ejercicio1.php">Volver atrás</a>
</body>
</html>