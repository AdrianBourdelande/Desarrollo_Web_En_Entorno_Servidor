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
 
    echo'
    <h1>Modificar Pisos</h1>
    <a href="../index.html">Inicio</a>
    <a href="pisos.html">atras</a><br>    
    ';

    if(isset($calle)){

        $consulta= "UPDATE pisos SET calle = :calle WHERE Codigo_piso = :Codigo_piso";
        $resultado = $db->prepare($consulta);
        if (!$resultado) {
            print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } elseif (!$resultado->execute([":calle" => $calle, ":Codigo_piso" => $codigoPiso])) {
            print "Error al ejecutar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } else {
            print " <p>Calle modificada correctamente.</p>\n";
            print "\n";
            }
    }else{
        echo'el campo calle no se ha modificado <br>';
    }
    if(isset($numero)){
        $consulta= "UPDATE pisos SET numero = :numero WHERE Codigo_piso = :Codigo_piso";
        $resultado = $db->prepare($consulta);
        if (!$resultado) {
            print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } elseif (!$resultado->execute([":numero" => $numero, ":Codigo_piso" => $codigoPiso])) {
            print "Error al ejecutar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } else {
            print " <p>Numero modificado correctamente.</p>\n";
            print "\n";
            }
    }else{
        echo'el campo numero no se ha modificado <br>';
    }
    if(isset($piso)){
        $consulta= "UPDATE pisos SET piso = :piso WHERE Codigo_piso = :Codigo_piso";
        $resultado = $db->prepare($consulta);
        if (!$resultado) {
            print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } elseif (!$resultado->execute([":piso" => $piso, ":Codigo_piso" => $codigoPiso])) {
            print "Error al ejecutar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } else {
            print " <p>Piso modificado correctamente.</p>\n";
            print "\n";
            }
    }else{
        echo'el campo piso no se ha modificado <br>';
    }
    if(isset($puerta)){
        $consulta= "UPDATE pisos SET puerta = :puerta WHERE Codigo_piso = :Codigo_piso";
        $resultado = $db->prepare($consulta);
        if (!$resultado) {
            print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } elseif (!$resultado->execute([":puerta" => $puerta, ":Codigo_piso" => $codigoPiso])) {
            print "Error al ejecutar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } else {
            print " <p>Puerta modificada correctamente.</p>\n";
            print "\n";
            }
    }else{
        echo'el campo puerta no se ha modificado <br>';
    }
    if(isset($cp)){
        $consulta= "UPDATE pisos SET cp = :cp WHERE Codigo_piso = :Codigo_piso";
        $resultado = $db->prepare($consulta);
        if (!$resultado) {
            print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } elseif (!$resultado->execute([":cp" => $cp, ":Codigo_piso" => $codigoPiso])) {
            print "Error al ejecutar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } else {
            print " <p>Codigo postal modificado correctamente.</p>\n";
            print "\n";
            }
    }else{
        echo'el campo cp no se ha modificado <br>';
    }
    if(isset($metros)){
        $consulta= "UPDATE pisos SET metros = :metros WHERE Codigo_piso = :Codigo_piso";
        $resultado = $db->prepare($consulta);
        if (!$resultado) {
            print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } elseif (!$resultado->execute([":metros" => $metros, ":Codigo_piso" => $codigoPiso])) {
            print "Error al ejecutar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } else {
            print " <p>Metros modificados correctamente.</p>\n";
            print "\n";
            }
    }else{
        echo'el campo metros no se ha modificado <br>';
    }
    if(isset($zona)){
        $consulta= "UPDATE pisos SET zona = :zona WHERE Codigo_piso = :Codigo_piso";
        $resultado = $db->prepare($consulta);
        if (!$resultado) {
            print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } elseif (!$resultado->execute([":zona" => $zona, ":Codigo_piso" => $codigoPiso])) {
            print "Error al ejecutar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } else {
            print " <p>Zona modificada correctamente.</p>\n";
            print "\n";
            }
    }else{
        echo'el campo zona no se ha modificado <br>';
    }
    if(isset($precio)){
        $consulta= "UPDATE pisos SET precio = :precio WHERE Codigo_piso = :Codigo_piso";
        $resultado = $db->prepare($consulta);
        if (!$resultado) {
            print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } elseif (!$resultado->execute([":precio" => $precio, ":Codigo_piso" => $codigoPiso])) {
            print "Error al ejecutar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } else {
            print " <p>Precio modificado correctamente.</p>\n";
            print "\n";
            }
    }else{
        echo'el campo precio no se ha modificado <br>';
    }
    if(isset($imagen)){
        $consulta= "UPDATE pisos SET imagen = :imagen WHERE Codigo_piso = :Codigo_piso";
        $resultado = $db->prepare($consulta);
        if (!$resultado) {
            print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } elseif (!$resultado->execute([":imagen" => $imagen, ":Codigo_piso" => $codigoPiso])) {
            print "Error al ejecutar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } else {
            print " <p>Imagen modificada correctamente.</p>\n";
            print "\n";
            }
    }else{
        echo'el campo imagen no se ha modificado <br>';
    }
    if(isset($usuario_id)){
        $consulta= "UPDATE pisos SET usuario_id = :usuario_id WHERE Codigo_piso = :Codigo_piso";
        $resultado = $db->prepare($consulta);
        if (!$resultado) {
            print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } elseif (!$resultado->execute([":usuario_id" => $usuario_id, ":Codigo_piso" => $codigoPiso])) {
            print "Error al ejecutar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
            } else {
            print " <p>Id de Usuario modificado correctamente.</p>\n";
            print "\n";
            }
    }else{
        echo'el campo usuario_id no se ha modificado <br>';
    }
    
    // Cerrar la conexión
    $db = null;
    
    ?>