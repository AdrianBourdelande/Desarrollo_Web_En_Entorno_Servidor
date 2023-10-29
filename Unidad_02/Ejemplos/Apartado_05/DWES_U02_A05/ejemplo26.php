<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 26</title>
</head>
<body>
<?php
function bienvenida($idioma) {
    if($idioma=="es") {
        echo "Hola, mundo<br/>";
    } elseif($idioma=="en") {
        echo "Hello, world<br/>";
    }
    else {
        echo "Lo siento, no reconozco el idioma<br/>";
    }
}
bienvenida("es"); 
bienvenida("en"); 
?>
</body>
</html>