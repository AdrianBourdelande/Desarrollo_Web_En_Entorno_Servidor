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
    $conexion = mysqli_connect('localhost', 'root', 'rootroot')
        or die ('La conexión al servidor ha fallado');
    mysqli_select_db($conexion, 'inmobiliaria')
        or die ('La conexión a la base de datos ha fallado');

    $querySLQ = 'SELECT * from pisos';
    $consulta = mysqli_query($conexion, $querySLQ)
        or die ('La consulta ha fallado');

    $nfilas = mysqli_num_rows($consulta);
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
         print ("<TH>Usuario</TH>\n");
        
         print ("</TR>\n");
		 for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysqli_fetch_array ($consulta);
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
      }
      else
         print ("No hay noticias disponibles");

    mysqli_close ($conexion);
    ?>
    
</body>
</html>