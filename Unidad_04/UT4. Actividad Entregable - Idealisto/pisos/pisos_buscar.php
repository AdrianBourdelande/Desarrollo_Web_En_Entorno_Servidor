<?php
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


// Recuperar datos del formulario
$filtro =  $_REQUEST['filtro'];
$filtroTexto = $_REQUEST['filtroTexto'];

$consulta = "SELECT * FROM pisos WHERE $filtro=:filtroTexto";
    $result = $db->prepare($consulta);
    $result->execute([":filtroTexto"=>$filtroTexto]);
    echo'<br>';
    print ("<TABLE border=1>\n");
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

    


      echo "<a href='./pisos_buscar.html'>atras</a>";


// Cerrar la conexión
$db = null;

?>