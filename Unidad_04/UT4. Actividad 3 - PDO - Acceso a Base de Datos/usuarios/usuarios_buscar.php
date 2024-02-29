<?php
// Configuración de la base de datos
function conectaDb(){
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
$filtro =  $_REQUEST['filtro'];
$filtroTexto = $_REQUEST['filtroTexto'];

// Preparar y ejecutar la consulta de inserción
$consulta = "SELECT * FROM usuario WHERE $filtro=:filtroTexto";
$result = $db->prepare($consulta);
    $result->execute([":filtroTexto"=>$filtroTexto]);
    echo'<br>';
    print ("<TABLE border=1>\n");
    print ("<TR>\n");
    print ("<TH>Id de usuario</TH>\n");
    print ("<TH>Nombre</TH>\n");
    print ("<TH>Email</TH>\n");
            
    print ("</TR>\n");
    while($resultado=$result->fetch()){
        print ("<TR>\n");
            print ("<TD>" . $resultado[0] . "</TD>\n");
			print ("<TD>" . $resultado['nombres'] . "</TD>\n");
            print ("<TD>" . $resultado['correo'] . "</TD>\n");
                        
            print ("</TR>\n");
    }
    print ("</TABLE>\n");

    


      echo "<a href='./usuarios_buscar.html'>atras</a>";


// Cerrar la conexión
$db = null;



?>