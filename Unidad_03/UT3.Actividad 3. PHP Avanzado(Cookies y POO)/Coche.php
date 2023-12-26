<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase Coche</title>
</head>
<body>
<?php
        class Coche extends Vehiculo{
            private $cilindrada;
            public function __construct($cilindrada){
                parent::__construct();
                $this->cilindrada = $cilindrada;
            }
            public function quemaRueda(){
                return "RUEDASSSSSSSSSSSSSSS";
            }

        }
    ?>
</body>
</html>