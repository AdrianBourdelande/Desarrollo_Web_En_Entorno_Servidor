<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 31</title>
</head>
<body>
<?php
function concatena3($cad2) {
   global $cadena1;
   $cadena1=$cadena1.$cad2;
}
$cadena1="Hola";
$cadena2=", mundo";
concatena3($cadena2);
echo "<strong>Redefiniendo cadena1 como global:</strong> ";
echo $cadena1."<br/>";
?>
</body>
</html>