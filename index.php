<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_6</title>
</head>
<body>
    <form action="function.php">
        <label for="edad">Edad: </label>
        <input type="number" name="edad" required>

        <label for="fecha">Fecha: </label>
        <input type="date" name="fecha" value="<?php echo date('Y-m-d'); ?>" required>

        <button type="submit">Calcular Precio</button>
    </form>
</body>
</html>