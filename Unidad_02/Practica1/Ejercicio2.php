<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 1 // Ejercicio 2</title>
</head>
<body>
    <?php
        $tiradaJ1 = [rand(1,6),rand(1,6),rand(1,6),rand(1,6),rand(1,6)];       
        $tiradaJ2 = [rand(1,6),rand(1,6),rand(1,6),rand(1,6),rand(1,6)];
        $sumaTiradaJ1 = 0;
        $sumaTiradaJ2 = 0;
      
        
        for($i=0;$i<5;$i++){
            echo "<img src='./pictures/$tiradaJ1[$i].png'>";
            $sumaTiradaJ1= $sumaTiradaJ1 + $tiradaJ1[$i];
            
        }
        echo "<h3>Puntuación del jugador J1: $sumaTiradaJ1</h3>";
        echo"<br>";
        for($i=0;$i<5;$i++){
            echo "<img src='./pictures/$tiradaJ2[$i].png'>";
            $sumaTiradaJ2= $sumaTiradaJ2 + $tiradaJ2[$i];
        }
        echo "<h3>Puntuación del jugador J2: $sumaTiradaJ2</h3>";
        echo"<br>";
        echo"<h3>Resultado</h3>";
        echo"<br>";
        if($sumaTiradaJ1>$sumaTiradaJ2){
            echo"<h3>El Jugador 1 gana</h3>";
            setcookie("contadorJ1", $_COOKIE["contadorJ1"]+1, time()+6);
        }
        if($sumaTiradaJ1<$sumaTiradaJ2){
            echo"<h3>El Jugador 2 gana</h3>";
            setcookie("contadorJ2", $_COOKIE["contadorJ2"]+1, time()+6);
        }
        if($sumaTiradaJ1==$sumaTiradaJ2){
            echo"<h3>Los jugadores han empatado</h3>";
            
        }

        echo"
            <h1>REGISTRO DE LAS RONDAS</h1>
            <h3>Rondas ganadas por el jugador 1: </h3>". $_COOKIE["contadorJ1"]."<br>";
        echo"
            <h3>Rondas ganadas por el jugador 2: </h3>". $_COOKIE["contadorJ2"];        
        
        
    ?>
</body>
</html>