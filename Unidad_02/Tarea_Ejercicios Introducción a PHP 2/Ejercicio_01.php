<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01</title>
</head>
<body>
    <h3>Define tres arrays de 10 números enteros cada uno, con nombres "numero",cuadrado"
y "cubo". Carga el array "numero" con valores aleatorios entre 0 y 100. En el array         
"cuadrado" se deben almacenar los cuadrados de los valores que hay en el array "numero".    
En el array "cubo" se deben almacenar los cubos de los valores que hay en "numero".
A continuación, muestra el contenido de los tres arrays dispuestos en tres columnas.</h3>

<?php
    $numero = array();
    $cuadrado = array();
    $cubo = array();

    for ($i=0; $i<10; $i++){
        $numero[$i]=rand(0,100);        
    }
    
    for($i=0;$i<10;$i++){
        $cuadrado[$i]= pow($numero[$i],2);        
    }

    for($i=0;$i<10;$i++){
        $cubo[$i]= pow($numero[$i],3);        
    }
    
    // for($i=0;$i<10;$i++)
    // {
    //     echo $numero[$i]."  ||  ".$cuadrado[$i]."  ||  ".$cubo[$i]."<br>";
        
    // }
    // echo "<br>";
    echo"<table>
            <tr>
                <th>Nombre</th>
                <th>Cuadrado</th>
                <th>Cubo</th>
            </tr>";
    
    for($i=0;$i<10;$i++)
    {
        echo "<tr>
                <td>$numero[$i]</td>
                <td>$cuadrado[$i]</td>
                <td>$cubo[$i]</td>";
        
    }
    echo"</table>";
?>
    
</body>
</html>