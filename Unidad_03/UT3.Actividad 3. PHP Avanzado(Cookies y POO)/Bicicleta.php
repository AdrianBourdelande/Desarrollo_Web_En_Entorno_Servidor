<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase Bicicleta</title>
</head>
<body>
<?php
        class Bicicleta extends Vehiculo{
            private $numero_de_marchas;
            
            public function __construct($numero_de_marchas){
                parent::__construct();
                $this->numero_de_marchas = $numero_de_marchas;
            }

            public function hazCaballito(){
                return "Caballitooooooooooooooo";
            }
        }
    ?>
</body>
</html>