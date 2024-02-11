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
$nombres =  $_REQUEST['nombres'];
$correo =  $_REQUEST['correo'];
$clave = $_REQUEST['clave'];

// Preparar y ejecutar la consulta de inserción
$sql = "INSERT INTO usuario (nombres, correo, clave) 
VALUES ('$nombres', '$correo', '$clave')";

if (mysqli_query($conn, $sql)) {
    echo "Usuario insertado con éxito.";
} else {
    echo "Error al insertar usuario: " . mysqli_error($conn);
}
echo "<a href='./usuarios_anadir.html'>atras</a>";
// Cerrar la conexión
mysqli_close($conn);

?>