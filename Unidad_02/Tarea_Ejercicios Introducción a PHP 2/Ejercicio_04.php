<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 04</title>
</head>
<body>
    <h3>Crea un mini-diccionario español-inglés que contenga, al menos, 10 palabras (con su traducción). 
        Utiliza un array asociativa para almacenar las parejas de palabras. Probar una palabra en español 
        y dará la correspondiente traducción en inglés.</h3>
    <?php
        $diccionario = [
            "Coche" => "Car",
            "Poder" => "Power",
            "Injusticia" => "Injustice",
            "Tren" => "Train",
            "Avión" => "Plane",
            "Bandera" => "Flag",
            "Microfono" => "Microphone",
            "Asesinato" => "Murder",
            "Agua" => "Water",
            "Fuego" => "Fire"
        ];

        echo "<h2>La palabra Agua en inglés se dice '".$diccionario["Agua"]."'</h2>";
    ?>
</body>
</html>