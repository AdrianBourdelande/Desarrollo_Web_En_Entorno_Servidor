<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase Vehiculo</title>
</head>
<body>
    <?php
        include_once 'Bicicleta.php';
        include_once 'Coche.php';

        class Vehiculo{
            public static $Kms_totales = 0;
            public static $VehiculosCreados = 0;

            private $km_recorridos;

            public function __construct(){
                self::$VehiculosCreados = self::$VehiculosCreados + 1;                
            }

            public static function getVehiculosCreados(){
                return self::$VehiculosCreados;
            }

            public static function getKmTotales(){
                return self::$Kms_totales;
            }

            public function getKmRecorridos(){
                return $this->km_recorridos;
            }

            public function recorre($km){
                $this->km_recorridos = $this->km_recorridos+$km;
                self::$Kms_totales = self::$Kms_totales + $km;
            }

        }
        $miBici = new Bicicleta("24");
        $miCoche = new Coche(1500);        
        $miBici->recorre(23);
        $miCoche->recorre(234);
        echo $miBici->hazCaballito()."<br>";
        echo $miCoche->quemaRueda()."<br>";
        $miBici->recorre(54);
        echo "Mi bici ha recorrido ".$miBici->getKmRecorridos()." Km<br>";
        echo "Mi coche ha recorrido ".$miCoche->getKmRecorridos()." Km<br>";
        echo "Se han creado un total de ".Vehiculo::getVehiculosCreados()." vehículos<br>";
        echo "Todos los vehículos han hecho un total de ".Vehiculo::getKmTotales()." Km<br>";
        
    ?>
</body>
</html>