<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "inmobiliaria";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
// Recuperar datos del formulario
$usuario_id =  $_REQUEST['usuario_id'];

// DELETE FROM <table name> WHERE <condition>;
// Preparar y ejecutar la consulta de inserción
$sql = "DELETE FROM usuario WHERE usuario_id='$usuario_id'";

if (mysqli_query($conn, $sql)) {
    echo "Usuario borrado con éxito.";
    
} else {
    echo "Error al borrar usuario: " . mysqli_error($conn);
}
echo "<a href='./usuarios_borrar.html'>atras</a>";

// Cerrar la conexión
mysqli_close($conn);
?>