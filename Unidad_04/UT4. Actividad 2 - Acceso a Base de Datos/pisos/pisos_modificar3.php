<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
    $codigoPiso = $_REQUEST['codigoPiso'];
    $calle =  $_REQUEST['calle'];
    $numero =  $_REQUEST['numero'];
    $piso =  $_REQUEST['piso'];
    $puerta =  $_REQUEST['puerta'];
    $cp =  $_REQUEST['cp'];
    $metros =  $_REQUEST['metros'];
    $zona =  $_REQUEST['zona'];
    $precio =  $_REQUEST['precio'];
    $usuario_id =  $_REQUEST['usuario_id'];    

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
    <h1>Modificar Pisos</h1>
    <a href="../index.html">Inicio</a>
    <a href="pisos.html">atras</a><br>    
    ';

    if(isset($calle)){
        $sql = "UPDATE pisos SET calle = '$calle' WHERE Codigo_piso=$codigoPiso";
        if (mysqli_query($conn, $sql)) {
            echo "Campo modificado con exito.";
        } else {
            echo "Error al modificar campo: " . mysqli_error($conn);
        }
    }else{
        echo'el campo calle no se ha modificado <br>';
    }
    if(isset($numero)){
        $sql = "UPDATE pisos SET numero = '$numero' WHERE Codigo_piso=$codigoPiso";
        if (mysqli_query($conn, $sql)) {
            echo "Campo modificado con exito.";
        } else {
            echo "Error al modificar campo: " . mysqli_error($conn);
        }
    }else{
        echo'el campo numero no se ha modificado <br>';
    }
    if(isset($piso)){
        $sql = "UPDATE pisos SET piso = '$piso' WHERE Codigo_piso=$codigoPiso";
        if (mysqli_query($conn, $sql)) {
            echo "Campo modificado con exito.";
        } else {
            echo "Error al modificar campo: " . mysqli_error($conn);
        }
    }else{
        echo'el campo piso no se ha modificado <br>';
    }
    if(isset($puerta)){
        $sql = "UPDATE pisos SET puerta = '$puerta' WHERE Codigo_piso=$codigoPiso";
        if (mysqli_query($conn, $sql)) {
            echo "Campo modificado con exito.";
        } else {
            echo "Error al modificar campo: " . mysqli_error($conn);
        }
    }else{
        echo'el campo puerta no se ha modificado <br>';
    }
    if(isset($cp)){
        $sql = "UPDATE pisos SET cp = '$cp' WHERE Codigo_piso=$codigoPiso";
        if (mysqli_query($conn, $sql)) {
            echo "Campo modificado con exito.";
        } else {
            echo "Error al modificar campo: " . mysqli_error($conn);
        }
    }else{
        echo'el campo cp no se ha modificado <br>';
    }
    if(isset($metros)){
        $sql = "UPDATE pisos SET metros = '$metros' WHERE Codigo_piso=$codigoPiso";
        if (mysqli_query($conn, $sql)) {
            echo "Campo modificado con exito.";
        } else {
            echo "Error al modificar campo: " . mysqli_error($conn);
        }
    }else{
        echo'el campo metros no se ha modificado <br>';
    }
    if(isset($zona)){
        $sql = "UPDATE pisos SET zona = '$zona' WHERE Codigo_piso=$codigoPiso";
        if (mysqli_query($conn, $sql)) {
            echo "Campo modificado con exito.";
        } else {
            echo "Error al modificar campo: " . mysqli_error($conn);
        }
    }else{
        echo'el campo zona no se ha modificado <br>';
    }
    if(isset($precio)){
        $sql = "UPDATE pisos SET precio = '$precio' WHERE Codigo_piso=$codigoPiso";
        if (mysqli_query($conn, $sql)) {
            echo "Campo modificado con exito.";
        } else {
            echo "Error al modificar campo: " . mysqli_error($conn);
        }
    }else{
        echo'el campo precio no se ha modificado <br>';
    }
    if(isset($imagen)){
        $sql = "UPDATE pisos SET imagen = '$imagen' WHERE Codigo_piso=$codigoPiso";
        if (mysqli_query($conn, $sql)) {
            echo "Campo modificado con exito.";
        } else {
            echo "Error al modificar campo: " . mysqli_error($conn);
        }
    }else{
        echo'el campo imagen no se ha modificado <br>';
    }
    if(isset($usuario_id)){
        $sql = "UPDATE pisos SET usuario_id = '$usuario_id' WHERE Codigo_piso=$codigoPiso";
        if (mysqli_query($conn, $sql)) {
            echo "Campo modificado con exito.";
        } else {
            echo "Error al modificar campo: " . mysqli_error($conn);
        }
    }else{
        echo'el campo usuario_id no se ha modificado <br>';
    }
    
    // Cerrar la conexión
    mysqli_close($conn);
    
    ?>