<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 21</title>
</head>
<body>
<?php
$telefonos=array("Juan"=>"66611223","Maria"=>"65432101");
$telefonos["Susana"]="6111111";
$telefonos[]="123123123";
foreach($telefonos as $clave=>$valor) {
    echo "<strong>Nombre</strong>: $clave <strong>Teléfono</strong>: $valor<br/>";
}
?>
</body>
</html>