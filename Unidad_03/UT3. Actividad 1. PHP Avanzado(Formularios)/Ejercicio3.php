<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Formularios// Ejercicio 3</title>
</head>
<body>
    <h3>Realiza un conversor de Kb a Mb.</h3>
    <Form action="Ejercicio3B.php" method="POST">
        <label for="cantidad">Introduce la cantidad a convetir</label>
        <input type="text" name="cantidad">
        <select name="conversion">
            <option value="Mb">Pasar de Kb a Mb</option>
            <option value="Kb">Pasar de Mb a Kb</option>
        </select>
        <input type="submit" value="Enviar">
    </Form>
</body>
</html>