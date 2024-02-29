<?php
// Configuración de la base de datos
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
$usuario_id =  $_REQUEST['usuario_id'];

// DELETE FROM <table name> WHERE <condition>;
// Preparar y ejecutar la consulta de inserción
$consulta = "DELETE FROM usuario WHERE usuario_id=:usuario_id";
$resultado = $db->prepare($consulta);
if (!$resultado) {
print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
} elseif (!$resultado->execute ([":usuario_id" => $usuario_id] )) {
print "Error al ejecutar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
} else {
print " <p>Usuario borrado correctamente.</p>\n";
print "\n";
}

$db = null;

?>