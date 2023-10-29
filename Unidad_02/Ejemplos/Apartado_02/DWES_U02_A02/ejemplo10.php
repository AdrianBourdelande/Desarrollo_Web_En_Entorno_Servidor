<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 10</title>
</head>
<body>
<?php
$cadena="Hola, mundo. ¿Qué tal estás hoy?";
echo "Cadena original: $cadena <br/>";
echo "Los 12 primeros caracteres: ";
echo substr($cadena,0,12)."<br/>"; // la primera posición es la 0
echo "La longitud de la cadena es ".strlen($cadena)."<br/>";
echo "Buscamos Mundo con la M mayúscula: ";
echo strpos($cadena,"Mundo")."<br/>"; // no devuelve nada
echo "Buscamos mundo con la m minúscula: ";
echo strpos($cadena,"mundo")."<br/>"; // devuelve la posición 6
echo "Todo en mayúsculas: ".strtoupper($cadena)."<br/>";
echo "Todo en mayúsculas con UTF-8: ".mb_strtoupper($cadena,"UTF-8")."<br/>";
echo "Todo en minúsculas: ".strtolower($cadena)."<br/>";
echo "Devuelve a partir del punto (incluido): ".strstr($cadena,".")."<br/>";
echo "La cadena al revés: ".strrev($cadena)."<br/>";
echo "La función strrev no tiene alternativas para soportar Unicode <br/>";
?>
</body>
</html>