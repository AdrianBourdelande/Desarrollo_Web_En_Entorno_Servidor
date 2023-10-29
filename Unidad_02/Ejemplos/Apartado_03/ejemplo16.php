<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 16</title>
</head>
<body>
<?php
$mes=22;
if($mes==1 || $mes==3 || $mes==5 || $mes==7 || $mes==8 || $mes==10 || $mes==12) {
    $mensaje="tiene 31 días";
}
elseif($mes==4 || $mes==6 || $mes==9 || $mes==11) {
    $mensaje="tiene 30 días";
}
elseif($mes==2) {
    $mensaje="tiene 28 días";
}
else {
    $mensaje="no es un mes válido";
}
echo "El mes $mes $mensaje<br/>";
switch($mes) {
    case 1:case 3:case 5:case 7:case 8:case 10:case 12:
        $mensaje="tiene 31 días";
        break;
    case 4:case 6:case 9:case 11:
        $mensaje="tiene 30 días";
        break;
    case 2:
        $mensaje="tiene 28 días";
        break;
    default:
        $mensaje="no es un mes válido";
}
echo "El mes $mes $mensaje <br/>";
?>
</body>
</html>