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
    $conexion = mysqli_connect('localhost', 'root', 'rootroot')
        or die ('La conexión al servidor ha fallado');
    mysqli_select_db($conexion, 'inmobiliaria')
        or die ('La conexión a la base de datos ha fallado');

    $querySLQ = 'SELECT * from usuario';
    $consulta = mysqli_query($conexion, $querySLQ)
        or die ('La consulta ha fallado');

    $nfilas = mysqli_num_rows($consulta);
    if ($nfilas > 0)
      {
         print ("<TABLE border=1>\n");
         print ("<TR>\n");
         print ("<TH>Codigo Usuarios</TH>\n");
         print ("<TH>Nombre</TH>\n");
         print ("<TH>Email</TH>\n");
                 
         print ("</TR>\n");
		 for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysqli_fetch_array ($consulta);
            print ("<TR>\n");
            print ("<TD>" . $resultado[0] . "</TD>\n");
			print ("<TD>" . $resultado['nombres'] . "</TD>\n");
            print ("<TD>" . $resultado['correo'] . "</TD>\n");
                       
            print ("</TR>\n");
         }
        

         print ("</TABLE>\n");
      }
      else
         print ("No hay usuarios existentes");

    mysqli_close ($conexion);
    ?>
    <a href="usuarios.html">atras</a>
</body>
</html>