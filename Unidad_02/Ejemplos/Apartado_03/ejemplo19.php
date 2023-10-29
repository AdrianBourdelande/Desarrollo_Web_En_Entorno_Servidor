<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 19</title>
</head>
<body>
<?php
$hoy=date("d-m-Y");
for($dia=strtotime($hoy), $cont=1;$cont<=10;$dia=strtotime("+1day",$dia), $cont++) {
    echo date("d-m-Y",$dia)."<br/>";
}
?>
</body>
</html>