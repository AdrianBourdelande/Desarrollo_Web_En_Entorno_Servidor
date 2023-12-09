<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Funciones y sesiones// Ejercicio 3</title>
</head>
<body>
    <h3>Realizar un contador de visitas con sesiones. Cada vez que entre en la pagina que me 
        cuente una visita. Mostrarlo de alguna manera.</h3>
        
    
    <?php 
        session_start();       
        $_SESSION["contador"]++;
        echo "Veces que se ha visitado la página <h3>".$_SESSION["contador"]."</h3>";       
    ?>

</body>
</html>