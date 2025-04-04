<?php
    require_once 'conexion.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $libro_id = $_POST["libro_id"];

        $sql = "SELECT * FROM libros WHERE id = $libro_id AND estado = 0"; 
        $resultado = mysqli_query($conexion, $sql);
        $libro = mysqli_fetch_array($resultado, MYSQLI_ASSOC); 

        if ($libro) {
            $sqlDelete = "DELETE FROM libros WHERE id = $libro_id";
            
            if (mysqli_query($conexion, $sqlDelete)) {
                header("Location: index.php");
                exit();
            } else {
                echo "Error al eliminar el libro: " . mysqli_error($conexion);
            }
        } else {
            echo "No se encontró el libro o el libro no está disponible para eliminar.";
        }
    }
?>
