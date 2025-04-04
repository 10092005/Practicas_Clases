<?php
    require_once 'conexion.php';

    // Verificar si el ID fue pasado correctamente
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"]) && !empty($_POST["id"])) {
        $id = $_POST["id"]; // Obtener el ID del libro a eliminar

        // Verificar si el libro existe
        $sql = "SELECT * FROM libros WHERE id = $id AND estado = 1";
        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) > 0) {
            // El libro existe y está disponible (estado = 1), lo podemos eliminar
            $sqlDelete = "DELETE FROM libros WHERE id = $id";
            if (mysqli_query($conexion, $sqlDelete)) {
                // Redirigir después de eliminar
                header("Location: index.php");
                exit();
            } else {
                echo "Error al eliminar el libro: " . mysqli_error($conexion);
            }
        } else {
            echo "No se encontró el libro o el libro no está disponible para eliminar.";
        }
    } else {
        echo "No se ha proporcionado un ID válido.";
    }
?>
