<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 28</title>
</head>
<body>
<?php
function bienvenida(string $sujeto=" a todos"): string {
    return "Hola $sujeto<br/>";
}
echo bienvenida();          // mostrará "Hola a todos"
echo bienvenida("Jaime");   // mostrará "Hola Jaime"
?>
</body>
</html>