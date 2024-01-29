<?php
    $buscar = $_REQUEST['buscarPor'];
    $fichero = fopen("contacts.txt","r");
    $resultados = false;
    echo 'Aqui tienes los resultados de tu busqueda'.'<br>';
    while(!feof($fichero)){
        $linea = fgets($fichero);
        $contacto = explode(":", $linea);
        
        if($contacto[0]==$buscar||$contacto[1]==$buscar||$contacto[2]==$buscar||$contacto[3]==$buscar||$contacto[4]==$buscar){            
            
            echo $contacto[0]." ".$contacto[1]." ".$contacto[2]." ".$contacto[3]." ".$contacto[4]."<br>";
            $resultados = true;
        }
        
    }
    if($resultados == false){
        echo'No hay ningun contacto que cuya informacion coincida con la introducida en el campo de busqueda';
    }
    echo'<a href="contacts.php">volver a contactos';
?>