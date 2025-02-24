<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_2</title>
</head>
<body>
    <form method="GET" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    include 'funcion.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nombre"]) && isset($_GET["apellido"]) && isset($_GET["direccion"])) {
        $nombre = trim($_GET["nombre"]);
        $apellido = trim($_GET["apellido"]);
        $direccion = trim($_GET["direccion"]);

        if ($nombre !== "" && $apellido !== "" && $direccion !== "") {
            imprimir_resultado("Nombre", htmlspecialchars($nombre));
            imprimir_resultado("Apellido", htmlspecialchars($apellido));
            imprimir_resultado("Dirección", htmlspecialchars($direccion));
        } else {
            echo "⚠️ Por favor, complete todos los campos correctamente.";
        }
    }
    ?>
    
</body>
</html>
