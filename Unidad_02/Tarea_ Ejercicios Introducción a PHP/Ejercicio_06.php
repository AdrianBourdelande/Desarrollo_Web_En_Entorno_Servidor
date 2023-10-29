<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ejercicios Introducción a PHP // Ejercicio 6</title> 
    <link rel="stylesheet" type="text/css" href="Ejercicio_06.css">         
    
</head>
<body>
    <h3> Un programa que genere 2 tiradas de 3 dados(simulando 2 jugadores). 
Muestre las dos tiradas y me diga cual tiene mayor puntuación(sumando las tiradas).</h3>
    <?php 
        //Generar 3 numeros aleatorios para el jugador 1
        //Generar 3 numeros aleatorios para el jugador 2
        //Sumar los 3 numeros del jugador 1 en una variable
        //Sumar los 3 numeros del jugaodr 2 en una variable
        //Comparar ambos numeros y con ello determinar ganador

        $J1_num1=rand(1,6);
        $J1_num2=rand(1,6);
        $J1_num3=rand(1,6);

        $J2_num1=rand(1,6);
        $J2_num2=rand(1,6);
        $J2_num3=rand(1,6);

        $total_J1=$J1_num1+$J1_num2+$J1_num3;
        $total_J2=$J2_num1+$J2_num2+$J2_num3;

        
        if($total_J1==$total_J2){
            $ganador=0;
            echo"Empate <br><br>";
        }
        if ($total_J2>$total_J1) {
            $ganador=2;
            echo"El jugador 2 gana <br><br>";
        }
        if($total_J2<$total_J1){
            $ganador=1;
            echo"El jugador 1 gana <br><br>";
        }


        echo"Ahora hacemos el ejercicio usando las imágenes de los dados par ahacerlo más atractivo";        
    
        //Le ponemos otros dados al segundo jugador para que sea más variado gráficamente
        echo"
        <div id='tablero'>
            <div id='J1'>
                <h2>Jugador 1</h2>
                <img src='./pictures/$J1_num1.png'>
                <img src='./pictures/$J1_num2.png'>
                <img src='./pictures/$J1_num3.png'>
                <h6>El jugador 1 ha sacado un total de $total_J1 </h6>
            </div>
            <div id='J2'>
                <h2>Jugador 2</h2>
                <img src='./pictures/dados_black_blue/$J2_num1.png'>
                <img src='./pictures/dados_black_blue/$J2_num2.png'>
                <img src='./pictures/dados_black_blue/$J2_num3.png'>
                <h6>El jugador 1 ha sacado un total de $total_J2 </h6>
            </div>
        
        </div>";
        if($ganador==1){
            echo"   
            <div id='resultado'>
                <h1>El jugador 1 ha ganado!</h1>
            </div>";
        }
        if($ganador==2){
            echo"   
            <div id='resultado'>
                <h1>El jugador 2 ha ganado!</h1>
            </div>";
        }
        if($ganador==0){
            echo"   
            <div id='resultado'>
                <h1>Empate!</h1>
            </div>";
        }        
    ?>
</body>
</html>