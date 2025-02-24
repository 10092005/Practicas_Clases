<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_1</title>
    <link rel="stylesheet" href="1_style.css">
</head>
<body>
    <h1>Formulario</h1>
    <form method="GET" action="">
        <label for="nombre" class="nombreLab">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre" required><br>

        <label for="apellido" class="apellidoLab">Apellido:</label>
        <input type="text" id="apellido" name="apellido" placeholder="Apellido" required><br>

        <label for="direccion" class="direccionLab">Dirección:</label>
        <input type="text" id="direccion" name="direccion" placeholder="Dirección" required><br>

        <input type="submit" class="button" value="Enviar">
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
