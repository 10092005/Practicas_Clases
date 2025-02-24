<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_1</title>
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
    function imprimir_resultado($texto, $resultado) {
        echo "$texto: $resultado <br>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nombre"]) && isset($_GET["apellido"]) && isset($_GET["direccion"])) {
        $nombre = trim($_GET["nombre"]);
        $apellido = trim($_GET["apellido"]);
        $direccion = trim($_GET["direccion"]);

        if ($nombre !== "" && $apellido !== "" && $direccion !== "") {
            imprimir_resultado("Nombre", ($nombre));
            imprimir_resultado("Apellido", ($apellido));
            imprimir_resultado("Dirección", ($direccion));
        } else {
            echo "⚠️ Por favor, complete todos los campos correctamente.";
        }
    }
    ?>
</body>
</html>
