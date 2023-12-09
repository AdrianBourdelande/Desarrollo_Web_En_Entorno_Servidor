<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Funciones y sesiones// Ejercicio 2</title>
</head>
<body>
    <Form action="Ejercicio2Apellidos.php" method="POST">
        <label for="nombre">Apellidos:</label>
        <input type="text" name="apellidos">
        <input type="submit" value="Enviar">        
    </Form>
    <a href="./Ejercicio2.php">Volver al Menu principal</a>
    <?php 
       session_start();
       $_SESSION["miSesion"]["apellidos"] = $_REQUEST['apellidos'];
    
        
    ?>
</body>
</html>