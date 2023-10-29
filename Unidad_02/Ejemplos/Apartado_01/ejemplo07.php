<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 07</title>
</head>
<body>
<?php
// variables con el saludo en diferentes idiomas
$m_en="Hello";
$m_es="Hola";
$m_it="Ciao";
// variable para definir el idioma a usar en este caso
$idioma="es";
// variable con nombre generado dinámicamente
$bienvenida="m_".$idioma; // el nombre de la variable en este ejemplo será m_ca
// usamos la variable generada dinámicamente
echo "¡".$$bienvenida."!";
?>
</body>
</html>
