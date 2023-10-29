<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 08</title>
</head>
<body>
<?php
$variable="contenido";
// las comillas dobles permiten traducir variables y caracteres especiales
echo nl2br("El valor de la variable es $variable.\n El salto de línea se aplica al usar nl2br().\n");
echo nl2br("El <strong>código HTML</strong> se aplica\n");
echo nl2br("Podemos escribir caracteres como ' y \ \n");
// las comillas simples no permiten la traducción salvo casos muy concretos 
echo nl2br('El valor de la variable es $variable.\n El salto de línea no se aplica.\n');
echo nl2br('El <strong>código HTML</strong> sí que se aplica\n');
echo "<br/>";
echo nl2br('Podemos escribir una comilla simple (\') o una barra invertida (\\) ');
echo nl2br('escapando con el carácter \\');
?>
</p>
</body>
</html>