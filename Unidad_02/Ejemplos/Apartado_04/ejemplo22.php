<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 22</title>
</head>
<body>
<?php
$cadena="Esto es una cadena";
echo "<strong>Cadena original:</strong> $cadena <br/>";
$array=explode(" ",$cadena);
echo "<strong>Conversión a array: </strong>";
print_r($array);
echo "<br/><strong>Conversión a cadena con guiones: </strong>";
$cadena2=implode("-",$array);
echo $cadena2;
?>
</body>
</html>