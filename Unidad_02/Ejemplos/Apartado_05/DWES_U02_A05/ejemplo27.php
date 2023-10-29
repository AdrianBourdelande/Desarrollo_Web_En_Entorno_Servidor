<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 27</title>
</head>
<body>
<?php
function bienvenida($idioma) {
    if($idioma=="es") {
        $mensaje="Hola, mundo<br/>";
    } elseif($idioma=="en") {
        $mensaje="Hello, world<br/>";
    }
    else {
        $mensaje="Lo siento, no reconozco el idioma<br/>";
    }
    return $mensaje;
}
$mensajeRecibido = bienvenida("es"); // se guarda el resultado devuelto
echo $mensajeRecibido; // y luego trabajamos con él
{
    $variable = "alex";
}
echo $variable;
echo bienvenida("en"); // también puede incluirse el valor recibido en
                       // otras instrucciones, pero en ese caso no se guarda
?>
</body>
</html>