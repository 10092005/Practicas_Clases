<?php
    require_once 'conexion.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];

        $sql = "INSERT INTO libros (titulo, autor, estado) VALUES ('$titulo', '$autor', 0)";

        if (mysqli_query($conexion, $sql)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conexion);
        }
    }
?>