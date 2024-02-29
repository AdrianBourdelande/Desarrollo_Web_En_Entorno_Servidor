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
$calle =  $_REQUEST['calle'];
$numero =  $_REQUEST['numero'];
$piso = $_REQUEST['piso'];
$puerta = $_REQUEST['puerta'];
$cp = $_REQUEST['cp'];
$metros = $_REQUEST['metros'];
$zona = $_REQUEST['zona'];
$precio = $_REQUEST['precio'];
$imagen = $_REQUEST['imagen'];
$usuario_id = $_REQUEST['usuario_id'];

// Preparar y ejecutar la consulta de inserción

$consulta = "INSERT INTO pisos (calle, numero, piso, puerta, cp, metros, zona, precio, imagen, usuario_id) 
VALUES (:calle, :numero, :piso, :puerta, :cp, :metros, :zona, :precio, :imagen, :usuario_id)";
$resultado = $db->prepare($consulta);

if (!$resultado) {
print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
} elseif (!$resultado->execute([":calle" => $calle, ":numero" => $numero, ":piso" => $piso, ":puerta" => $puerta, 
":cp" => $cp, ":metros" => $metros, ":zona" => $zona, ":precio" => $precio, ":imagen" => $imagen,
 ":usuario_id" => $usuario_id])) {
print "Error al ejecutar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
} else {
print " <p>Piso añadido correctamente.</p>\n";
print "\n";
}




echo "<a href='./pisos_anadir.html'>atras</a>";
// Cerrar la conexión
$db = null;

?>