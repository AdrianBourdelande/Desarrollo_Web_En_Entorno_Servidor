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
$sql = "INSERT INTO pisos (calle, numero, piso, puerta, cp, metros, zona, precio, imagen, usuario_id) 
VALUES ('$calle', '$numero', '$piso', '$puerta', '$cp', '$metros', '$zona', '$precio', '$imagen', '$usuario_id')";

if (mysqli_query($conn, $sql)) {
    echo "Noticia insertada con éxito.";
} else {
    echo "Error al insertar noticia: " . mysqli_error($conn);
}
echo "<a href='./pisos_anadir.html'>atras</a>";
// Cerrar la conexión
mysqli_close($conn);

?>