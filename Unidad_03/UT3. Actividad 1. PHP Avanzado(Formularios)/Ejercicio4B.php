<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Formularios// Ejercicio 4</title>
    <style>
        #container{
            background-color: aliceblue;
            line-height:2em;
            width: 400px;
        }
    </style>
</head>
<body>
    <?php 
        $nombre= $_REQUEST['nombre'];
        $apellidos = $_REQUEST['apellidos']; 
        $edad = $_REQUEST['edad']; 
        $peso= $_REQUEST['peso']; 
        $sexo = $_REQUEST['sexo']; 
        $estado = $_REQUEST['estado'];
        $aficiones= $_REQUEST['aficiones']; 
        $nAficiones = count($aficiones);
        echo"
            <div id='container'>
            Su nombre es <b>".$nombre."</b><br>".
        "   Sus apellidos son <b>".$apellidos."</b><br>".
        "   Tiene <b>".$edad."</b><br>".
        "   Su peso es de <b>".$peso."</b> kg <br>".
        "   Es <b>".$sexo."</b><br>".
        "   Su estado civil es <b>".$estado."</b><br>
           Le gusta: <b>";
        for($i=0;$i<$nAficiones;$i++){
            if($i==($nAficiones-1)){
                echo $aficiones[$i]."</b><br>";
            }else{
                echo $aficiones[$i].", ";
            }
        }

        echo"<a href=./Ejercicio4.php>Volver al formulario</a></div>";
    ?>
</body>
</html>