<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 1 // Ejercicio 3</title>
</head>
<body>
    <form action="datos_operaciones.php" method="Post">
        <label for="primerNumero">Introduzca el primer numero: </label>
        <input type="number_format" name="primerNumero">
        <br>
        <br>
        <label for="segundoNumero">Introduzca el segundo numero: </label>
        <input type="number_format" name="segundoNumero">
        <br>
        <br>
        <label for="op">Seleccione una operacion:</label>
        <br>
        <input type="radio" name="op" value="suma" checked>Suma
        <input type="radio" name="op" value="resta">Resta
        <input type="radio" name="op" value="producto">Producto
        <input type="radio" name="op" value="cociente">Cociente
        <br>
        <br>
        <input type="submit" value="Enviar datos">
    </form>
</body>
</html>