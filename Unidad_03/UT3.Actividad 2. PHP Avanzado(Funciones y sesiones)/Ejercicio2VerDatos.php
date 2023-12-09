<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Funciones y sesiones// Ejercicio 1</title>
</head>
<body>
    
    <?php 
        session_start();       
        if($_SESSION["miSesion"]["nombre"]&&$_SESSION["miSesion"]["apellidos"]){
            echo "Nombre: ".$_SESSION["miSesion"]["nombre"]."<br>";
            echo "Apellidos: ".$_SESSION["miSesion"]["apellidos"]."<br>";
        }else{
            echo"<h2>Aun no se han introducido todos los datos del usuario</h2>";
        }
        
    ?>
    <a href="./Ejercicio2.php">Volver al Menu principal</a>
</body>
</html>