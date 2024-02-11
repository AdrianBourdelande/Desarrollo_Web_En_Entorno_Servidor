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
$filtro =  $_REQUEST['filtro'];
$filtroTexto = $_REQUEST['filtroTexto'];

// Preparar y ejecutar la consulta de inserción
$sql = "SELECT * FROM pisos WHERE $filtro='$filtroTexto'";

if (mysqli_query($conn, $sql)) {
    echo "Filtrado con éxito.";
    $nfilas = mysqli_num_rows(mysqli_query($conn, $sql));
    if ($nfilas > 0)
      {
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
		 for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysqli_fetch_array (mysqli_query($conn, $sql));
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


            
            print ("</TR>\n");
         }
        

         print ("</TABLE>\n");
      }
      echo "<a href='./pisos_buscar.html'>atras</a>";
} else {
    echo "Error al filtrar: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);

?>