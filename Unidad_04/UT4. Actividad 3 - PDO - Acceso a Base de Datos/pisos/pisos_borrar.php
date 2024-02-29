<?php
function conectaDb()
{
$dsn = 'mysql:host=localhost;dbname=inmobiliaria';;
$username = 'root';
$password = 'rootroot';
try {
$pdo = new PDO($dsn, $username, $password);
// echo 'conectado correctamente usando PDO';
return($pdo);
} catch(PDOException $e) {    
print "<p>Error: No puede conectarse con la base de
datos.</p>\n";
print "\n";
print " <p>Error: " . $e->getMessage() . "</p>\n";

}
}
    
$db = conectaDb();


// Recuperar datos del formulario
$codigoPiso =  $_REQUEST['codigoPiso'];


$consulta = "DELETE FROM pisos WHERE Codigo_piso=:Codigo_piso";
$resultado = $db->prepare($consulta);
if (!$resultado) {
print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
} elseif (!$resultado->execute ([":Codigo_piso" => $codigoPiso] )) {
print "Error al ejecutar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
} else {
print " <p>Piso borrado correctamente.</p>\n";
print "\n";
}





$db = null;
?>