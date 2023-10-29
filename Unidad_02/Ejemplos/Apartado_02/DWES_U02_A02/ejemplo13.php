<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 13</title>
</head>
<body>
<?php
// la fecha actual
$hoy=date_create(date("m/d/Y"));
// otra fecha (fin de año)
$fecha=date_create("12/31/2022");
$diferencia=date_diff($hoy,$fecha);
$diasQueFaltan=$diferencia->format("%a");
echo "Faltan $diasQueFaltan dias para fin de año";
?>
</body>
</html>