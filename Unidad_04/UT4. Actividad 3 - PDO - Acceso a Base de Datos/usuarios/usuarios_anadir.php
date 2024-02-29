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
$nombres =  $_REQUEST['nombres'];
$correo =  $_REQUEST['correo'];
$clave = $_REQUEST['clave'];


$consulta = "INSERT INTO usuario (nombres, correo, clave)
VALUES (:nombres, :correo, :clave)";
$resultado = $db->prepare($consulta);

if (!$resultado) {
print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
} elseif (!$resultado->execute([":calle" => $calle, ":numero" => $numero, ":piso" => $piso, ":puerta" => $puerta, 
":cp" => $cp, ":metros" => $metros, ":zona" => $zona, ":precio" => $precio, ":imagen" => $imagen,
 ":usuario_id" => $usuario_id])) {
print "Error al ejecutar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
} else {
print " <p>Usuario añadido correctamente.</p>\n";
print "\n";
}




echo "<a href='./usuarios_anadir.html'>atras</a>";
// Cerrar la conexión
$db = null;

// Preparar y ejecutar la consulta de inserción


?>