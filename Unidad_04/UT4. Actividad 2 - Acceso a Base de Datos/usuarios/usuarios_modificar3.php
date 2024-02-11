<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
    $usuario_id = $_REQUEST['usuario_id'];
    $nombre =  $_REQUEST['nombre'];
    $correo =  $_REQUEST['correo'];
    $clave =  $_REQUEST['clave'];

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
    echo'
    <h1>Modificar Usuarios</h1>
    <a href="../index.html">Inicio</a>
    <a href="usuarios.html">atras</a><br>    
    ';

    if(isset($nombre)){
        $sql = "UPDATE usuario SET nombres = '$nombre' WHERE usuario_id=$usuario_id";
        if (mysqli_query($conn, $sql)) {
            echo "Campo modificado con exito.<br>";
        } else {
            echo "Error al modificar campo: " . mysqli_error($conn)."<br>";
        }
    }else{
        echo'el campo nombre no se ha modificado <br>';
    }
    if(isset($correo)){
        $sql = "UPDATE usuario SET correo = '$correo' WHERE usuario_id=$usuario_id";
        if (mysqli_query($conn, $sql)) {
            echo "Campo modificado con exito.<br>";
        } else {
            echo "Error al modificar campo: " . mysqli_error($conn)."<br>";
        }
    }else{
        echo'el campo correo no se ha modificado <br>';
    }
    if(isset($clave)){
        $sql = "UPDATE usuario SET clave = '$clave' WHERE usuario_id=$usuario_id";
        if (mysqli_query($conn, $sql)) {
            echo "Campo modificado con exito.<br>";
        } else {
            echo "Error al modificar campo: " . mysqli_error($conn)."<br>";
        }
    }else{
        echo'el campo clave no se ha modificado <br>';
    }
    
    // Cerrar la conexión
    mysqli_close($conn);
    
    ?>