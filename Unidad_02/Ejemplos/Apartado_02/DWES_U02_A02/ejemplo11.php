<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 11</title>
</head>
<body>
<?php
echo "Fecha actual: ";
echo date("d-m-Y")."<br/>";
echo "Fecha y hora actual: ";
echo date("d-m-Y\th:i:s")."<br/>";
echo "Hoy es: ";
echo date("l")." ,".date("d")." de ".date("F")." de ".date("Y")."<br/>";
?>
</body>
</html>