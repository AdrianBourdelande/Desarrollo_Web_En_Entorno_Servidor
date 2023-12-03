<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Formularios// Ejercicio 3</title>
</head>
<body>
    <?php 
        $cantidad = $_REQUEST['cantidad'];
        $conversion = $_REQUEST['conversion']; 
        
        if($conversion==='Mb'){
            $cantidadCalculada = $cantidad/1000;
            echo 
                $cantidad." Kb equivalen a ".$cantidadCalculada." Mb";
        }
        if($conversion==='Kb'){
            $cantidadCalculada = $cantidad*1000;
            echo 
                $cantidad." Mb equivalen a ".$cantidadCalculada." Kb";
        }
        
        
        
        
    ?>
</body>
</html>