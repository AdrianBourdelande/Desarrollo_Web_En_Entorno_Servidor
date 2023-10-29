<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ejercicios Introducción a PHP // Ejercicio 3</title>
</head>
<body>
    <h3>  Muestra la tabla de multiplicar de un número generado de manera aleatoria entre 1 y 10. 
        <br>El resultado en formato &lttable&gt</h3>
    <?php 
        $random_number=rand(1,10);
        //echo "$random_number"."<br>";  Comprobamos con echo recargando la pagia varias veces 
        //que efectivamente se generaq un numero aleatorio
        
        /*
    	Primero lo hago sin la tabla para chequear que funciona bien el cálculo

        for($num=1;$num<=10;$num++){
            echo"$num x $random_number=".($num*$random_number)."<br>";
        }
        */

    
        echo'<table border="5" bgcolor="#C0C0C0" align="center">';
        echo"<tr>";
        echo '<th colspan="3">';
        echo"Tabla de multiplicar del número $random_number</th></tr>";
        for($num=1;$num<=10;$num++){
            $resultado=$num*$random_number;
            echo"            
                <tr>
                    <td>
                        $random_number 
                    </td>
                    <td>
                        $num                     
                    </td>
                    <td>
                        $resultado
                    </td>
                </tr>
            ";             
        }
        echo"</table>";
    ?>
</body>
</html>