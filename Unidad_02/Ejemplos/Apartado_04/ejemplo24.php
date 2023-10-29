º<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 24</title>
</head>
<body>
<?php
$contactos=array("Juan"=>array("Tfno"=>"111111","Email"=>"juan@gmail.com"),
                 "María"=>array("Tfno"=>"2222222","Email"=>"maria@gmail.com"),
                 "Elena"=>array("Tfno"=>"33333","Email"=>"elena@hotmail.com"));
foreach($contactos as $clave1=>$contacto) {
    echo "<br/><strong>Nombre contacto: $clave1: </strong><br/>";
    foreach($contacto as $clave2=>$valor) {
        echo " <strong>$clave2: </strong>$valor";
    }
}
?>
</body>
</html>