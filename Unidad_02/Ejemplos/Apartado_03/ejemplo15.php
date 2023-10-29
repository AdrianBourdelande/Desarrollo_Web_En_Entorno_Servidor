<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 15</title>
</head>
<body>
<?php
$numero=0;
// con if...elseif...else
if($numero==0) {
    $mensaje="es cero";
}
elseif($numero % 2 == 0) {
    $mensaje="es par";
}
else {
    $mensaje="es impar";
}
echo "<h3>Usando un bloque if...else</h3>";
echo "El número $numero $mensaje<br/>";
// con el operador ?
echo "<h3>Usando el operador ternario ?</h3>";
echo "El número $numero ".($numero==0 ? "es cero" : ($numero % 2 == 0 ? "es par" : " es impar"))."<br/>";
?>
</body>
</html>