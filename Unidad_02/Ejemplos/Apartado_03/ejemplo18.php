<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 18</title>
</head>
<body>
<?php
echo "<h3>Todos los números del 1 al 10</h3>";
for($contador=1;$contador<=10;$contador++) {
    echo "$contador<br/>";
}
echo "<h3>Solo los números impares del 1 al 10</h3>";
for($contador=1;$contador<=10;$contador+=2) {
    echo "$contador<br/>";
}
?>
</body>
</html>