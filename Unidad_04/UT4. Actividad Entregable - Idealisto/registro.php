<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body{
            background-color: grey;
        }
        
        .container{
            display: flex;
            flex-wrap: wrap;
            align-content:center;  
            justify-content: space-around; 
            margin-top: 10%;
            width:50%;
        }  
        h1{
            text-align: center;
        }
    </style>
    <title>Idealisto</title>
</head>
<body>
    <h1>IDEALISTO</h1>
    <form action="registro2.php">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos">
        <label for="email">Correo electronico</label>
        <input type="email" name="email">
        <label for="password">contraseña</label>
        <input type="password" name="password">
        <select name="tipo_usuario" id="tipo_usuario">
            <option value="comprador">Comprador</option>
            <option value="vendedor">Vendedor</option>
        </select>
        <button type="submit">Registrarse</button>
    </form>

    
       

</body>

</html>