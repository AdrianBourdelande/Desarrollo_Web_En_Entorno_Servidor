<?php
    $nombre=$_REQUEST['nombre'];
    $apellido1=$_REQUEST['apellido1'];
    $apellido2=$_REQUEST['apellido2'];
    $telefono=$_REQUEST['telefono'];
    $direccion=$_REQUEST['direccion'];
    $fichero=fopen("contacts.txt","a+");
    fputs($fichero,"\n".$nombre.":".$apellido1.":".$apellido2.":".$telefono.":".$direccion);
    fclose($fichero);	
    echo 'Contacto añadido con éxito'.'<br>';
    echo'<a href="contacts.php">volver a contactos';
?>