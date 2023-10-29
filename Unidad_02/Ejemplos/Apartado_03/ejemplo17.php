<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 17</title>
</head>
<body>
<?php
$inicio=1;
$fin=10;    
while($inicio <= $fin) {
    echo $inicio++."<br/>";
}
$inicio=1;
$fin=10;
do {
    echo $inicio++."<br/>";
}
while($inicio <= $fin);
?>
</body>
</html>