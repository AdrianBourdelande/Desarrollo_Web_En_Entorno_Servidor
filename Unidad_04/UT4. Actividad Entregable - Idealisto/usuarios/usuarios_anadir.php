<?php
include '../login2.php';
    
$db = conectaDb();
// Recuperar datos del formulario
$nombre =  $_REQUEST['nombre'];
$apellidos =  $_REQUEST['apellidos'];
$email =  $_REQUEST['email'];
$password = $_REQUEST['password'];
$tipo_usuario = $_REQUEST['tipo_usuario'];


$consulta = "INSERT INTO usuario (nombre,apellidos, email, password, tipo_usuario)
VALUES (:nombre, :apellidos, :email, :password, :tipo_usuario)";
$resultado = $db->prepare($consulta);

if (!$resultado) {
    print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
    } elseif (!$resultado->execute([":nombre" => $nombre, ":apellidos" => $apellidos, ":email" => $email,
     ":password" => $password, ":tipo_usuario" => $tipo_usuario])) {
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