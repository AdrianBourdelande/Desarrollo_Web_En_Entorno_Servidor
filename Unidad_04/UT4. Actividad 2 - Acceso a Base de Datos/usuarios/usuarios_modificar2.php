<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

    
    $nombreCheck =  $_REQUEST['nombreCheck'];
    $correoCheck =  $_REQUEST['correoCheck'];
    $claveCheck =  $_REQUEST['claveCheck'];

    echo'
    <h1>Modificar Usuarios</h1>
    <a href="../index.html">Inicio</a>
    <a href="usuarios.html">atras</a><br>    
    ';
    echo'<form action="./usuarios_modificar3.php" method="post">
    <label for="usuario_id">Id del usuario a modificar</label>
    <input type="number" name="usuario_id" id="usuario_id"><br>
    ';
    
    if($nombreCheck=='nombreCheck'){
        echo'<label for="nombre">Modifica el campo nombre</label>
        <input type="text" name="nombre" id="nombre"><br>';
    }else{
        echo'el campo nombre no se va a modificar <br>';
    }
    if($correoCheck=='correoCheck'){
        echo'<label for="correo">Modifica el campo correo</label>
        <input type="number" name="correo" id="correo"><br>';
    }else{
        echo'el campo correo no se va a modificar <br>';
    }
    if($claveCheck=='claveCheck'){
        echo'<label for="clave">Modifica el campo clave</label>
        <input type="number" name="clave" id="clave"><br>';
    }else{
        echo'el campo clave no se va a modificar <br>';
    }
    echo '<input type="submit" value="Modificar">';   
?>