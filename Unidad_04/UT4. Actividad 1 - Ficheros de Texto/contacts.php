<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Contacts</title>
</head>
<body>
    <div id="contenedor">
        <div id="busqueda">
            <form action="buscar.php" method="post">
                <label for="buscarPor">Buscar</label>
                <input type="text" id="buscarPor" name="buscarPor" class="form-label"><br>
                <button type="submit" class="btn btn-primary mb-4"> BUSCAR</button>
            </form>
        </div>
        <div id="add">
            <form action="add.php" method="post">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-label"><br>
                <label for="apellido1">Primer apellido</label>
                <input type="text" id="apellido1" name="apellido1" class="form-label"><br>
                <label for="apellido2">Segundo apellido</label>
                <input type="text" id="apellido2" name="apellido2" class="form-label"><br>
                <label for="direccion">Email</label>
                <input type="text" id="direccion" name="direccion" class="form-label"><br>
                <label for="telefono">Telefono</label>
                <input type="text" id="telefono" name="telefono" class="form-label"><br>
                <button type="submit" class="btn btn-primary mb-4"> AÑADIR</button>
            </form>
        </div>
        <div id="contactos">
            <h2>Contactos</h2>
          
        <?php
        //MOSTRAR CONTACTOS DEL FICHERO  
        $fichero=fopen("contacts.txt","a+");
        while(!feof($fichero)){
            $linea = fgets($fichero);
            $contacto = explode(":", $linea);
            echo $contacto[0]." ".$contacto[1]." ".$contacto[2]." ".$contacto[3]." ".$contacto[4]."<br>";
        }
        fclose($fichero);	

        //BUSCAR
        
        //AÑADIR
       
        ?>
        </div>
    </div>
</body>
</html>