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
$codigoPiso =  $_REQUEST['codigoPiso'];

// DELETE FROM <table name> WHERE <condition>;
// Preparar y ejecutar la consulta de inserción
$sql = "DELETE FROM pisos WHERE codigo_piso='$codigoPiso'";

if (mysqli_query($conn, $sql)) {
    echo "Piso borrado con éxito.";
    
} else {
    echo "Error al borrar piso: " . mysqli_error($conn);
}
echo "<a href='./pisos_borrar.html'>atras</a>";

// Cerrar la conexión
mysqli_close($conn);
?>