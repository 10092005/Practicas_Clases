<?php
    include 'conexion.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $estado = $_POST["estado"];

        $sql = "INSERT INTO libros (titulo, autor, genero) VALUES ('$titulo', '$autor', '$estado')";

        if (mysqli_query($conexion, $sql)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conexion);
        }
    }
?>