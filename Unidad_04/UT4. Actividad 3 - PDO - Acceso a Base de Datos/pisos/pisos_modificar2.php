<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

    $codigoPiso = $_REQUEST['codigoPiso'];
    $calleCheck =  $_REQUEST['calleCheck'];
    $numeroCheck =  $_REQUEST['numeroCheck'];
    $pisoCheck =  $_REQUEST['pisoCheck'];
    $puertaCheck =  $_REQUEST['puertaCheck'];
    $cpCheck =  $_REQUEST['cpCheck'];
    $metrosCheck =  $_REQUEST['metrosCheck'];
    $zonaCheck =  $_REQUEST['zonaCheck'];
    $precioCheck =  $_REQUEST['precioCheck'];
    $usuario_idCheck =  $_REQUEST['usuario_idCheck'];

    echo'
    <h1>Modificar Pisos</h1>
    <a href="../index.html">Inicio</a>
    <a href="pisos.html">atras</a><br>    
    ';
    echo'<form action="./pisos_modificar3.php" method="post">
    <label for="codigoPiso">Codigo del piso a modificar</label>
    <input type="number" name="codigoPiso" id="codigoPiso"><br>
    ';
    
    if($calleCheck=='calleCheck'){
        echo'<label for="calle">Modifica el campo calle</label>
        <input type="text" name="calle" id="calle"><br>';
    }else{
        echo'el campo calle no se va a modificar <br>';
    }
    if($numeroCheck=='numeroCheck'){
        echo'<label for="numero">Modifica el campo numero</label>
        <input type="number" name="numero" id="numero"><br>';
    }else{
        echo'el campo numero no se va a modificar <br>';
    }
    if($pisoCheck=='pisoCheck'){
        echo'<label for="piso">Modifica el campo piso</label>
        <input type="number" name="piso" id="piso"><br>';
    }else{
        echo'el campo piso no se va a modificar <br>';
    }
    if($puertaCheck=='puertaCheck'){
        echo'<label for="puerta">Modifica el campo puerta</label>
        <input type="text" name="puerta" id="puerta"><br>';
    }else{
        echo'el campo puerta no se va a modificar <br>';
    }
    if($cpCheck=='cpCheck'){
        echo'<label for="cp">Modifica el campo codigo postal</label>
        <input type="number" name="cp" id="cp"><br>';
    }else{
        echo'el campo codigo postal no se va a modificar <br>';
    }
    if($metrosCheck=='metrosCheck'){
        echo'<label for="metros">Modifica el campo metros</label>
        <input type="number" name="metros" id="metros"><br>';
    }else{
        echo'el campo metros no se va a modificar <br>';
    }
    if($zonaCheck=='zonaCheck'){
        echo'<label for="zona">Modifica el campo zona</label>
        <input type="text" name="zona" id="zona"><br>';
    }else{
        echo'el campo zona no se va a modificar <br>';
    }
    if($precioCheck=='precioCheck'){
        echo'<label for="precio">Modifica el campo precio</label>
        <input type="number" name="precio" id="precio"><br>';
    }else{
        echo'el campo precio no se va a modificar <br>';
    }
    if($usuario_idCheck=='usuario_idCheck'){
        echo'<label for="usuario_id">Modifica el campo usuario_id</label>
        <input type="number" name="usuario_id" id="usuario_id"><br>';
    }else{
        echo'el campo usuario_id no se va a modificar <br>';
    }
    echo '<input type="submit" value="Modificar">';   
        
    
    ?>