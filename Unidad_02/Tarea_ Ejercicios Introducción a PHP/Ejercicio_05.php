<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ejercicios Introducción a PHP // Ejercicio 5</title>
</head>
<body>
    <h3> Escribe un programa que muestre en dos columnas: 
        <br>Número -  cuadrado del número de 10 números aleatorios entre 5 y 20.</h3>
    <?php 
        echo"Primero hacemos el ejercicio de forma manual escribiendo mucho código:"."<br>";
        $rand_number_01 = rand(5,20);
        $rand_number_02 = rand(5,20);
        $rand_number_03 = rand(5,20);
        $rand_number_04 = rand(5,20);
        $rand_number_05 = rand(5,20);
        
        echo"$rand_number_01 - ";
        $cuadrado=$rand_number_01**2;
        echo"$cuadrado"."<br>";;
        echo"$rand_number_02 - ";
        $cuadrado=$rand_number_02**2;
        echo"$cuadrado"."<br>";
        echo"$rand_number_03 - ";
        $cuadrado=$rand_number_03**2;
        echo"$cuadrado"."<br>";;
        echo"$rand_number_04 - ";
        $cuadrado=$rand_number_04**2;
        echo"$cuadrado"."<br>";;
        echo"$rand_number_05 - ";
        $cuadrado=$rand_number_05**2;
        echo"$cuadrado"."<br><br>";

        echo"<h2>Ahora lo hacemos usando un bucle for</h2>";
        for($numero=1;$numero<6;$numero++){
            $numero_aleatorio=rand(5,20);
            $numero_cuadrado=$numero_aleatorio**2;
           
            echo"<h2>$numero_aleatorio - $numero_cuadrado </h2>";
        }

        echo'<br><p style="color:red">Esta forma de hacer el ejercicio no es perfecta ya que puede ser que se repita 
        un número alguna vez o más veces (muy improbable). Para evitar esto una posibilidad sería ir guardando 
        cada número generado aleatoriamente en un array y en cada vuelta chequear con un if si el número generado 
        aleatoriamente ya existe en el array en en tal caso generar otro así hasta que salga uno nuevo.</p>';

    ?>
</body>
</html>