<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
      function calcular ($edad , $fecha) {
        $precio = 600;
        $hoy = date('y-m-d');

        if ($fecha == $hoy) {
            if ($edad > 50) {
                $precio = $precio / 2;
                echo "El viaje te sale a mitad de precio. Disfrutalo!! <br>";
            } elseif ($edad < 15) {
                $precio = 0;
                echo "El viaje te sale gratis. Disfrutalo!! <br>";
            }
        }

        return $precio;
      }

      echo "Precio del viaje: " . calcular(14 , date('y-m-d')) . "€" ;
    ?>

</body>
</html>