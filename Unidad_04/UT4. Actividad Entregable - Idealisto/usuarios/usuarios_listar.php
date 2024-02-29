
    <?php
    include '../login2.php';
         
    $db = conectaDb();

    $consulta = "SELECT * from usuario";
    $result = $db->prepare($consulta);
    $result->execute();
    echo'<br>';

    print ("<TABLE border=1>\n");
         print ("<TR>\n");
         print ("<TH>Id de Usuario</TH>\n");
         print ("<TH>Nombre</TH>\n");
         print ("<TH>Apellidos</TH>\n");
         print ("<TH>Email</TH>\n");
        
         print ("</TR>\n");

         while($resultado=$result->fetch()){
            print ("<TR>\n");
            print ("<TR>\n");
            print ("<TD>" . $resultado[0] . "</TD>\n");
			print ("<TD>" . $resultado['nombre'] . "</TD>\n");
            print ("<TD>" . $resultado['apellidos'] . "</TD>\n");
            print ("<TD>" . $resultado['email'] . "</TD>\n");
                       
            print ("</TR>\n");
        }
        print ("</TABLE>\n");
    
        $db = null;
         
    ?>
  