<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $edad = $_GET['edad'];
            $fecha = $_GET['fecha'];
            
            $precio_base = 600; 
            $fecha_hoy = date('Y-m-d'); 
            
            if ($fecha === $fecha_hoy) {
                if ($edad > 50) {
                    $precio = $precio_base / 2;
                    echo "El viaje te sale a mitad de precio! <br>";
                } elseif ($edad < 15) {
                    $precio = 0; 
                    echo "La super oferta. El viaje te sale gratis!! <br>";
                } else {
                    $precio = $precio_base;
                    echo "No tienes ningun descuento <br>";
                }
            } else {
                $precio = $precio_base; 
                echo "Ya no aplican descuentos <br>";
            }
            
            echo "Precio del viaje: " . $precio . "€";
        }
    ?>

</body>
</html>