<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 09</title>
</head>
<body>
<?php
$variable="contenido";
// con heredoc
$texto=<<<EOD
<strong>Heredoc</strong>: el identificador va sin comillas o entre comillas dobles<br/>
El contenido de la variable "variable" es $variable <br/>
Se usa para textos largos que deben analizarse y sustituirse <br/>
EOD;
echo $texto;
echo "<br/>";
// con nowdoc
$texto=<<<'EOD'
<strong>Nowdoc</strong>: el identificador va entre comillas simples <br/>
El contenido de la variable "variable" es $variable <br/>
Se usa para textos largos literales, sin análisis ni sustituciones <br/>
EOD;
echo $texto;
?>
</body>
</html>