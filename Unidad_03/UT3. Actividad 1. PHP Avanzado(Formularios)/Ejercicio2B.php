<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Formularios// Ejercicio 2</title>
</head>
<body>
    <?php 
        $horasTrabajadas = $_REQUEST['horasTrabajadas'];
        $salario = $horasTrabajadas*12;        
        echo"
            A las ".$horasTrabajadas." horas trabajadas les corresponde un salario de 
            ".$salario."€";
        
        
    ?>
</body>
</html>