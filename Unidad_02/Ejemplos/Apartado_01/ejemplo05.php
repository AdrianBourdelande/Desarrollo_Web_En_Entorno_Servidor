<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 05</title>
</head>
<body>
<?php
$nombre="Elena";
$numero1="1";
$numero2=1;
$numero3=5.44;
$numero4=$numero2+$numero3;
echo "Tipo de la variable nombre: ".gettype($nombre)."<br/>";
echo "Tipo de la variable numero1: ".gettype($numero1)."<br/>";
echo "Tipo de la variable numero2: ".gettype($numero2)."<br/>";
echo "Tipo de la variable numero2: ".gettype($numero3)."<br/>";
echo "Tipo de la variable numero3: ".gettype($numero4)."<br/>";
echo "¿Es numérica la variable numero1? ".is_numeric($numero1)."<br/>";
echo "¿Es numérica la variable numero2? ".is_numeric($numero2)."<br/>";
echo "¿Es numérica la variable numero3? ".is_numeric($numero3)."<br/>";
echo "¿Es numérica la variable numero4? ".is_numeric($numero4)."<br/>";
echo "¿Es numérica la variable nombre? ".is_numeric($nombre)."<br/>";
echo "¿Es una cadena la variable numero1? ".is_string($numero1)."<br/>";
echo "¿Es una cadena la variable numero2? ".is_string($numero2)."<br/>";
echo "¿Es una cadena la variable numero3? ".is_string($numero3)."<br/>";
echo "¿Es una cadena la variable numero4? ".is_string($numero4)."<br/>";
echo "¿Es una cadena la variable nombre? ".is_string($nombre)."<br/>";
echo "¿Tiene un valor entero la variable numero1? ".is_integer($numero1)."<br/>";
echo "¿Tiene un valor entero la variable numero2? ".is_integer($numero2)."<br/>";
echo "¿Tiene un valor entero la variable numero3? ".is_integer($numero3)."<br/>";
echo "¿Tiene un valor entero la variable numero4? ".is_integer($numero4)."<br/>";
echo "¿Tiene un valor decimal la variable numero1? ".is_float($numero1)."<br/>";
echo "¿Tiene un valor decimal la variable numero2? ".is_float($numero2)."<br/>";
echo "¿Tiene un valor decimal la variable numero3? ".is_float($numero3)."<br/>";
echo "¿Tiene un valor decimal la variable numero4? ".is_float($numero4)."<br/>";
?>
</p>
</body>
</html>