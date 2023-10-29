<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 23</title>
</head>
<body>
<?php
$matriz=array(array(1,2,3),array(4,5,6),array(7,8,9));
$numfila=1;
foreach($matriz as $fila) {
    echo "<strong>Fila $numfila: </strong>";
    foreach($fila as $valor) {
        echo $valor." ";
    }
    $numfila++;
    echo "<br/>";
}
?>
</body>
</html>