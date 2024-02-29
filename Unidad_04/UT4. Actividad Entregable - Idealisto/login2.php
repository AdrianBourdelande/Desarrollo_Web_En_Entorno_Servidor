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
        }   
        .card{
            margin: 10px;
            width: 20%;
        }    
        label{
            color: white;
        }    
    </style>
    <title>Idealisto</title>
</head>
<body>
    
    <?php
    
    error_reporting(E_ERROR | E_PARSE);

    
function conectaDb()
{
$dsn = 'mysql:host=localhost;dbname=idealisto';;
$username = 'root';
$password = 'rootroot';
try {
$pdo = new PDO($dsn, $username, $password);
// echo 'conectado correctamente usando PDO';
return($pdo);
} catch(PDOException $e) {    
print "<p>Error: No puede conectarse con la base de
datos.</p>\n";
print "\n";
print " <p>Error: " . $e->getMessage() . "</p>\n";

}
}
    
$db = conectaDb();



// Recuperar datos del formulario
$emailForm = $_REQUEST['email'];
$passwordForm = $_REQUEST['password'];
$emailUsuario = '';
// Preparar y ejecutar la consulta de inserción

$consulta = "SELECT * FROM usuario WHERE email = :email";
$resultado = $db->prepare($consulta);


if (!$resultado) {
print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
} elseif (!$resultado->execute([":email" => $emailForm])) {
print "Error al ejecutar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
} else {
// print " <p>Consulta correcta.</p>\n";
print "\n";
}

while($result=$resultado->fetch()){
    $usuario_id = $result[0];
    $nombreUsuario = $result[1];
    $apellidosUsuario = $result[2];
    $emailUsuario = $result[3];
    $passwordUsuario = $result[4];
    $tipo_usuario = $result[5];    
}



// Cerrar la conexión



if($emailForm==$emailUsuario&&$passwordForm==$passwordUsuario){
    echo'Logueado correctamente<br>';
    
    
    switch($tipo_usuario){
        case 'comprador':
            $precioFiltro=10000000000;
            // echo'soy un comprador';
            echo'
                <form method="post">
                <label for="precio">Precio Maximo</label>
                <input type="number" name="precio" ></input>
                <button type="submit" class="btn btn-primary">buscar</button>
                </form>';
                if(isset($_POST['precio'])) {
                    // Realizar alguna acción cuando se presiona el botón
                    $precioFiltro=$_POST['precio'];
                }
                    
            $consulta = "SELECT * from pisos WHERE vendido = 0 && precio<=$precioFiltro";
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
                                <form method="post">
                                    <button type="submit" name="card'.$resultado['codigo_piso'].'" class="btn btn-primary">Comprar</button>
                                </form>';

                                
                                // Verificar si se ha enviado el formulario
                                if(isset($_POST['card'.$resultado['codigo_piso']])) {
                                    // Realizar alguna acción cuando se presiona el botón
                                    $codigo = $resultado['codigo_piso'];
                                    echo "Piso Comprado!";

                                    $consulta = "UPDATE pisos SET vendido = 1 WHERE codigo_piso = :codigo_piso";
                                    $resultado = $db->prepare($consulta);
                                    if (!$resultado) {
                                    print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
                                    } elseif (!$resultado->execute([":codigo_piso" => $codigo])) {
                                    print "Error al ejecutar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
                                    } else {
                                    // print " <p>Consulta correcta.</p>\n";
                                    print "\n";
                                    }

                                }
                                echo '
                            </div>
                        </div>                    
                ';
            }
            echo'</div>';
        break;
        case 'vendedor':
            echo'soy un vendedor';
            echo'
            <h1>Formulario apra poner un piso a la venta</h1>
            <form method="post">
                <label for="calle">Calle</label>
                <input type="text" name="calle" id="calle"><br>
                <label for="numero">Numero</label>
                <input type="number" name="numero" id="numero"><br>
                <label for="piso">Piso</label>
                <input type="number" name="piso" id="piso"><br>
                <label for="puerta">Puerta</label>
                <input type="text" name="puerta" id="puerta"><br>
                <label for="cp">CP</label>
                <input type="number" name="cp" id="cp"><br>
                <label for="metros">Metros</label>
                <input type="number" name="metros" id="metros"><br>
                <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio"><br>
                <label for="imagen">Imagen</label>
                <input type="text" name="imagen" id="imagen"><br>
                <button type="submit">Dar de alta</button>
            </form>
            ';
            
            if(isset($_POST['calle']) && isset($_POST['numero']) && isset($_POST['piso']) && isset($_POST['puerta']) &&
   isset($_POST['cp']) && isset($_POST['metros']) && isset($_POST['precio']) && isset($_POST['imagen'])){

    // Obtener los valores de los campos del formulario
    $calle = $_POST['calle'];
    $numero = $_POST['numero'];
    $piso = $_POST['piso'];
    $puerta = $_POST['puerta'];
    $cp = $_POST['cp'];
    $metros = $_POST['metros'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];
                // Realizar alguna acción cuando se presiona el botón
                $consulta = "INSERT INTO pisos (calle, numero, piso, puerta, cp, metros, precio, imagen, usuario_id) 
                VALUES (:calle, :numero, :piso, :puerta, :cp, :metros, :precio, :imagen, :usuario_id)";
                $resultado = $db->prepare($consulta);
                

                if (!$resultado) {
                print " Error al preparar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
                } elseif (!$resultado->execute([":calle" => $calle, ":numero" => $numero, ":piso" => $piso, ":puerta" => $puerta, 
                ":cp" => $cp, ":metros" => $metros, ":precio" => $precio, ":imagen" => $imagen,
                ":usuario_id" => $usuario_id])) {
                print "Error al ejecutar la consulta. SQLSTATE[{$db->errorCode()}]: {$db->errorInfo()[2]}";
                } else {
                print " <p>Piso añadido correctamente.</p>\n";
                print "\n";
                }
            }
            break;
        case 'admin':
            echo'
                
                    
                    <a href="./usuarios/usuarios_anadir.html" class="btn btn-primary">Añadir Usuarios</a>
                    <a href="./usuarios/usuarios_borrar.html" class="btn btn-primary">Borrar Usuarios</a>
                    <a href="./usuarios/usuarios_modificar.php" class="btn btn-primary">Modificar Usuarios</a>
                    <a href="./usuarios/usuarios_listar.php" class="btn btn-primary">Listar Usuarios</a><br><br><br>
                    
                
                
                    
                    <a href="./pisos/pisos_anadir.html" class="btn btn-primary">Añadir Pisos</a>
                    <a href="./pisos/pisos_borrar.html" class="btn btn-primary">Borrar Pisos</a>
                    <a href="./pisos/pisos_modificar.php" class="btn btn-primary">Modificar Pisos</a>
                    <a href="./pisos/pisos_listar.php" class="btn btn-primary">Listar Pisos</a>
                
                
            ';
            break;
    }
}else{
    echo'Tu cuenta de correo o tu contraseña son incorrectas';
}






$db = null;
?>
</body>

</html>




