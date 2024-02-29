<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idealisto Pisos</title>
</head>
<body>
    <h1>Lista de Pisos</h1>
    <a href="../index.html">Inicio</a>
    <a href="pisos.html">atras</a>
    <?php
    
    
    function conectaDb()
    {
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
    $consulta = "SELECT * from pisos";
    $result = $db->prepare($consulta);
    $result->execute();
    echo'<br>';
    print ("<TABLE border=1>\n");
         print ("<TR>\n");
         print ("<TH>Codigo Piso</TH>\n");
         print ("<TH>Calle</TH>\n");
         print ("<TH>Numero</TH>\n");
         print ("<TH>Piso</TH>\n");
         print ("<TH>Puerta</TH>\n");
         print ("<TH>CP</TH>\n");
         print ("<TH>Metros</TH>\n");
         print ("<TH>Zona</TH>\n");
         print ("<TH>Precio</TH>\n");
         print ("<TH>Usuario</TH>\n");
        
         print ("</TR>\n");
    while($resultado=$result->fetch()){
        print ("<TR>\n");
            print ("<TD>" . $resultado[0] . "</TD>\n");
			print ("<TD>" . $resultado['calle'] . "</TD>\n");
            print ("<TD>" . $resultado['numero'] . "</TD>\n");
            print ("<TD>" . $resultado['piso'] . "</TD>\n");
            print ("<TD>" . $resultado['puerta'] . "</TD>\n");
            print ("<TD>" . $resultado[5] . "</TD>\n");
            print ("<TD>" . $resultado['metros'] . "</TD>\n");
            print ("<TD>" . $resultado['zona'] . "</TD>\n");
            print ("<TD>" . $resultado['precio'] . "</TD>\n");
            print ("<TD>" . $resultado['usuario_id'] . "</TD>\n");

            
            print ("</TR>\n");
    }
    print ("</TABLE>\n");

    $db = null;
    ?>
    
</body>
</html>