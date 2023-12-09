<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Funciones y sesiones// Ejercicio 1</title>
</head>
<body>
    <h2>Los datos se han borrado</h2>
    <a href="./Ejercicio2.php">Volver al Menu principal</a>
    <?php 
       session_start();
       session_unset();
    
        
    ?>
</body>
</html>