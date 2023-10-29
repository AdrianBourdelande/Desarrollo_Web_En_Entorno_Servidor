<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso Práctico 2</title>
</head>
<body>
<?php
    // echo strtotime("now"), "\n";
    // echo strtotime("10 September 2000"), "\n";
    // echo strtotime("+1 day"), "\n";
    // echo strtotime("+1 week"), "\n";
    // echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
    // echo strtotime("next Thursday"), "\n";
    // echo strtotime("last Monday"), "\n";
    // echo"<br>";    

    echo "La fecha de mañana es ";
    echo date("d-m-Y",strtotime("+1 day"))."<br>";

    echo "La fecha de hoy es ";
    echo date("d-m-Y",strtotime("now"))."<br>";

    echo "La fecha de ayer es ";
    echo date("d-m-Y",strtotime("-1 day"))."<br>";
    
    
?>
</body>
</html>