<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        a{
            margin-left:200px;
        }
        body{
            background-color:grey;
        }
        .container{
            display: flex;
            flex-wrap: wrap;   
        }   
        .card{
            margin: 10px;
            width: 20%;
        }     
        h1{
            background-color: black;
            border-radius: 20px;
            color: whitesmoke;
            margin-top: 10px;
            padding: 10px;
            text-align: center;
            justify-content: center;  
        }   
    </style>
    <title>Idealisto</title>
</head>
<body>
    <h1>LISTA DE PISOS A LA VENTA</h1>
    <a href="../index.php" class="btn btn-primary">Atras</a>
    <br>
    <?php
        function conectaDb(){
            $dsn = 'mysql:host=localhost;dbname=idealisto';;
            $username = 'root';
            $password = 'rootroot';
            try {
                $pdo = new PDO($dsn, $username, $password);
                // echo 'conectado correctamente usando PDO';
                return($pdo);
            } catch(PDOException $e) {    
                // print "<p>Error: No puede conectarse con la base de
                // datos.</p>\n";
                // print "\n";
                // print " <p>Error: " . $e->getMessage() . "</p>\n";        
            }
        }
            
        $db = conectaDb();
        $consulta = "SELECT * from pisos";
        $result = $db->prepare($consulta);
        $result->execute();

        echo'<div class="container">';
        while($resultado=$result->fetch()){
            echo'
                
                    <div class="card">
                        <img src="' . $resultado['imagen'] . '"  class="card-img-top" alt="Imagen del piso">
                        <div class="card-body">
                            <h5 class="card-title">' . $resultado['calle'] . ', ' . $resultado['numero'] . '</h5>
                            <p class="card-text">Metros cuadrados: ' . $resultado['metros'] . '</p>
                            <p class="card-text">Precio: ' . $resultado['precio'] . '€</p>
                            <p class="card-text">Código Postal: ' . $resultado['cp'] . '</p>
                        </div>
                    </div>
                
            ';
        }
        echo'</div>';
?>
</body>

</html>

