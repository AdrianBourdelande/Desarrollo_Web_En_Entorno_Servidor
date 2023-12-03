<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Formularios// Ejercicio 4</title>
    <style>
        #aficionesSeleccion{
            display:flex;
            flex-wrap: wrap; 
            width: 300px;
        }
        #botones{
            margin-bottom: 1em;
            margin-top: 1em;
            width: 100%;
        }
        #container{
            background-color: aliceblue;
            display:flex;
            flex-wrap: wrap; 
            width: 600px; 
        }
        #hobbies{
            display:flex;
            flex-wrap: wrap;
            align-items: center; 
        }
        p{
            width: 100%;
        }
        .row{
            margin-right:1em;
        }
    </style>
</head>
<body>
    <h3> Ejercicio formulario completo. Comprobar que todos los campos 
        estén rellenos y que mostrarlo en otra pagina:</h3>
    <Form action="Ejercicio4B.php" method="POST">
        
        <div id="container">
            <p>Escriba los siguientes campos</p>
            <div class="row">
                <label for="nombre"><b>Nombre:</b></label>
                <br>
                <input type="text" name="nombre">
            </div>
            <div class="row">
                <label for="apellidos"><b>Apellidos:</b></label>
                <br>
                <input type="text" name="apellidos">
            </div>
            <div class="row">
                <label for="edad"><b>Edad:</b></label>
                <br>
                <select name="edad">
                    <option value="entre 10 y 19 años">Entre 10 y 19 años</option>
                    <option value="entre 20 y 29 años">Entre 20 y 29 años</option>
                    <option value="entre 30 y 39 años">Entre 30 y 39 años</option>
                    <option value="entre 40 y 49 años">Entre 40 y 49 años</option>
                    <option value="entre 50 y 59 años">Entre 50 y 59 años</option>
                    <option value="entre 60 y 69 años">Entre 60 y 69 años</option>
                    <option value="entre 70 y 79 años">Entre 70 y 79 años</option>
                    <option value="entre 80 y 89 años">Entre 80 y 89 años</option>
                    <option value="entre 90 y 99 años">Entre 90 y 99 años</option>
                </select>
            </div>
            <div class="row">
                <label for="peso"><b>Peso:</b></label>
                <br>
                <input type="number" name="peso">
            </div>
            <div class="row">
                <label for="sexo"><b>Sexo:</b></label>
                <br>
                <input type="radio" name="sexo" value="un hombre">
                <label for="hombre">Hombre</label>
                <input type="radio" name="sexo" value="una mujer">
                <label for="mujer">Mujer</label>
            </div>
            <div class="row">
                <label for="estado"><b>Estado civil:</b></label>
                <br>
                <input type="radio" name="estado" value="soltero">
                <label for="soltero">Soltero</label>
                <input type="radio" name="estado" value="casado">
                <label for="casado">Casado</label>
                <input type="radio" name="estado" value="otro">
                <label for="otro">Otro</label>
            </div>
            <div class="row"  id="hobbies">
                <div id="aficiones" class="element"><b>Aficiones</b></div>
                
                <div id="aficionesSeleccion" class="element">
                    <div>
                        <input type="checkbox" name="aficiones[]" value="el cine"/>
                        <label for="scales">Cine</label>
                        <input type="checkbox" name="aficiones[]" value="la literatura"/>
                        <label for="scales">Literatura</label>
                        <input type="checkbox" name="aficiones[]" value="los tebeos"/>
                        <label for="scales">Tebeos</label>
                    </div>
                    <div>
                        <input type="checkbox" name="aficiones[]" value="el deporte"/>
                        <label for="scales">Deporte</label>
                        <input type="checkbox" name="aficiones[]" value="la musica"/>
                        <label for="scales">Música</label>
                        <input type="checkbox" name="aficiones[]" value="la television"/>
                        <label for="scales">Televisión</label>
                    </div>
                </div>
            </div>
            <div id="botones">
            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
            </div>
            
        </div>
</Form>
</body>
</html>