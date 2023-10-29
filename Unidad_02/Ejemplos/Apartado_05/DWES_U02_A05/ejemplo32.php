<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 32</title>
</head>
<body>
<?php
function concatena4($cad2) {
    $GLOBALS["cadena1"]=$GLOBALS["cadena1"].$cad2;
}
$cadena1="Hola";
$cadena2=", mundo";
concatena4($cadena2);
echo "<strong>Accediendo al vector GLOBALS:</strong> ";
echo $cadena1."<br/>";
?>
</body>
</html>