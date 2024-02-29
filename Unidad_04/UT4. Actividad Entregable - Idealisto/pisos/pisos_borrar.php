<?php
include '../login2.php';

    
$db = conectaDb();


// Recuperar datos del formulario
$codigoPiso =  $_REQUEST['codigoPiso'];


$consulta = "DELETE FROM pisos WHERE codigo_piso=:codigo_piso";
$resultado = $db->prepare($consulta);
if (!$resultado) {
print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
} elseif (!$resultado->execute ([":codigo_piso" => $codigoPiso] )) {
print "Error al ejecutar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
} else {
print " <p>Piso borrado correctamente.</p>\n";
print "\n";
}





$db = null;
?>