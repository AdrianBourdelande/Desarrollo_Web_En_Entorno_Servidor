<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idealisto Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <?php
    function conectaDb(){
        $dsn = 'mysql:host=localhost;dbname=inmobiliaria';;
        $username = 'root';
        $password = 'rootroot';
        try {
            $pdo = new PDO($dsn, $username, $password);
            echo 'conectado correctamente usando PDO';
            return($pdo);
        } catch(PDOException $e) {    
            print "<p>Error: No puede conectarse con la base de
            datos.</p>\n";
            print "\n";
            print " <p>Error: " . $e->getMessage() . "</p>\n";        
        }
    }        
    $db = conectaDb();

    $consulta = "SELECT * from usuario";
    $result = $db->prepare($consulta);
    $result->execute();
    echo'<br>';

    print ("<TABLE border=1>\n");
         print ("<TR>\n");
         print ("<TH>Codigo Usuarios</TH>\n");
         print ("<TH>Nombre</TH>\n");
         print ("<TH>Email</TH>\n");
        
         print ("</TR>\n");

         while($resultado=$result->fetch()){
            print ("<TR>\n");
            print ("<TR>\n");
            print ("<TD>" . $resultado[0] . "</TD>\n");
			print ("<TD>" . $resultado['nombres'] . "</TD>\n");
            print ("<TD>" . $resultado['correo'] . "</TD>\n");
                       
            print ("</TR>\n");
        }
        print ("</TABLE>\n");
    
        $db = null;
         
    ?>
    <a href="usuarios.html">atras</a>
</body>
</html>