<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 12</title>
</head>
<body>
<?php
echo "Fecha actual: ";
echo date("d-m-Y")."<br/>";
// generamos una fecha nueva con mktime
$fecha=mktime(10,15,35,10,5,2019);
$dia=date("l, d-m-Y",$fecha);
$hora=date("H:i:s",$fecha);
echo "Fecha generada con mktime: $dia $hora <br/>";
?>
</body>
</html>