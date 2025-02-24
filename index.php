<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Viaje a Las Islas Canarias</h1>
    <h3>Verifica si obtienes algun descuento</h3>
    <h5>OJO: Solo por hoy descuentos</h5>
    <form method="GET" action="function.php">
        <label for="edad" class="edadLab">Edad: </label>
        <input type="number" name="edad" id="edad" required>

        <label for="fecha" class="fechaLab">Fecha: </label>
        <input type="date" name="fecha" id="fecha" value="<?php echo date('Y-m-d'); ?>" required>

        <button type="submit" class="button">Calcular</button>
    </form>
</body>
</html>