<?php
include '../login2.php';
// Configuración de la base de datos

    
$db = conectaDb();
$usuario_idForm =  $_REQUEST['usuario_idForm'];
// Recuperar datos del formulario

// DELETE FROM <table name> WHERE <condition>;
// Preparar y ejecutar la consulta de inserción
$consulta = "DELETE FROM usuario WHERE usuario_id=:usuario_idForm";
$resultado = $db->prepare($consulta);
if (!$resultado) {
print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
} elseif (!$resultado->execute ([":usuario_idForm" => $usuario_idForm])) {
print "Error al ejecutar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
} else {
print " <p>Usuario borrado correctamente.</p>\n";
print "\n";
echo'<a href="../index.php">Atras</a>';
}

$db = null;

?>