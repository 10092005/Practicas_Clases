<?php
    require_once 'conexion.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["libro"])) {
            $libro_id = $_POST["libro"];
            $nombre = $_POST["nombre"];
            $correo = $_POST["correo"];
            $tiempo = $_POST["tiempo"];

            $sql = "INSERT INTO prestamos (nombre, correo, libro_id, tiempo) VALUES ('$nombre', '$correo', '$libro_id', '$tiempo')";
            if (mysqli_query($conexion, $sql)) {
                $sqlUpdate = "UPDATE libros SET estado = 1 WHERE id = $libro_id";
                if (mysqli_query($conexion, $sqlUpdate)) {
                    header("Location: index.php");
                    exit();
                } else {
                    echo "Error al actualizar el estado del libro: " . mysqli_error($conexion);
                }
            } else {
                echo "Error al insertar el préstamo: " . mysqli_error($conexion);
            }
        } else {
            echo "Error: No se proporcionó el 'libro'.";
        }
    }
?>
