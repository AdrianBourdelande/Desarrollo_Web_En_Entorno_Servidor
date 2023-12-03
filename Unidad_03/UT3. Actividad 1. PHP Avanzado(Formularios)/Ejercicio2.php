<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Formularios// Ejercicio 2</title>
</head>
<body>
    <h3> Escribe un programa que calcule el salario semanal de un trabajador en base a las horas 
        trabajadas. Se pagarán 12 euros por hora. Las horas se piden en un formulario.
    </h3>
    <Form action="Ejercicio2B.php" method="POST">
        <label for="horasTrabajadas">Introduce el número de horas trabajadas:</label>
        <input type="text" name="horasTrabajadas">
        <input type="submit" value="Enviar">
    </Form>
</body>
</html>