<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Funciones y sesiones// Ejercicio 1</title>
</head>
<body>
    <Form action="Ejercicio2Nombre.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <input type="submit" value="Enviar">        
    </Form>
    <a href="./Ejercicio2.php">Volver al Menu principal</a>
    <?php 
       session_start();
       $_SESSION["miSesion"]["nombre"] = $_REQUEST['nombre'];
    
        
    ?>
</body>
</html>