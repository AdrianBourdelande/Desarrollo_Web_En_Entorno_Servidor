<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 30</title>
</head>
<body>
<?php
function concatena1($cad1, $cad2) {
   $cad1=$cad1.$cad2;
}
function concatena2(&$cad1, $cad2) {
    $cad1=$cad1.$cad2;
 }
$cadena1="Hola";
$cadena2=", mundo";
concatena1($cadena1, $cadena2);
echo "<strong>Pasando la cadena1 por valor:</strong> ";
echo $cadena1."<br/>";
concatena2($cadena1, $cadena2);
echo "<strong>Pasando la cadena1 por referencia:</strong> ";
echo $cadena1."<br/>";
?>
</body>
</html>