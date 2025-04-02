<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_4</title>
</head>
<body>
    
    <?php
      function multiplicar() {
        for ($contador = 0; $contador <= 10; $contador++) {
            echo "2 x $contador = " . (2 * $contador) . "<br>";
        }
    }
    
    multiplicar();
    ?>

</body>
</html>