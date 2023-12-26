<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: grey;
        }
        form{
            border: 2px solid black;
            margin: auto;
            text-align: center;
            width:25%;
        }
        p{
            background-color: red;
            border: 2px solid black;
            border-radius: 15px;
            font-size: 3em;
            margin:10px;
            padding:30px;
        }
    </style>
    <title> Cookies y formulario para cambiar de color</title>
</head>
<body>
<?php 
    $colorInput = $_REQUEST['colorInput'];
    setcookie('color', $colorInput);
?> 
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id='prueba'>
        <p <?php 
        echo "style='background-color:".$colorInput."'"; ?>>
        Este es un texto de prueba del cual se puede variar el color de fondo</p>
        <label for="colorInput">Elige el color de fondo del texto:</label><br>
        <input type="color" name="colorInput" id="colorInput"><br>
        <input type="submit" value="Cambiar Color">
    </form>
    
    
</body>
</html>