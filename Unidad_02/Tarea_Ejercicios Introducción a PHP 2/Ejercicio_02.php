<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02</title>
</head>
<body>
    <h3>Escribe un programa que genere un una tirada de 5 dados, que almacene la tirada en un vector. 
        A continuación que muestre los dados y me diga donde cual es el dado más alto y en que posición 
        se encuentra.</h3>
    <?php
        $tirada = [rand(1,6),rand(1,6),rand(1,6),rand(1,6),rand(1,6)];
        for($i=0;$i<5;$i++){
            echo "<img src='./img/$tirada[$i].png'>";
        }
        $valor_maximo = max($tirada);
        for($i=0;$i<5;$i++){
            if($tirada[$i]==$valor_maximo){
                echo "<br>
                <h1>El valor máximo es ".$valor_maximo." y está representado en el dado número ".($i+1)."</h1>";
                break;
            }
        }
    ?>
</body>
</html>