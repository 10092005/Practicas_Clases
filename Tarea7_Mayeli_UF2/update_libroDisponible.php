<?php
    require_once 'conexion.php';

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $prestamo_id = $_POST["id"] ;

        $sql = "SELECT libro_id FROM prestamos WHERE id = $prestamo_id";
        $result = mysqli_query($conexion , $sql);
        $libro = mysqli_fetch_array($result , MYSQLI_ASSOC);

        if($libro) {
            $sqlDelete = "DELETE FROM prestamos WHERE id = $prestamo_id";
            mysqli_query($conexion , $sqlDelete);

            $sqlUpdate = "UPDATE libros SET estado = 0 WHERE id = $libro[libro_id]";
            mysqli_query($conexion , $sqlUpdate);
        }

        header("Location: index.php");
        exit();
    }
?>