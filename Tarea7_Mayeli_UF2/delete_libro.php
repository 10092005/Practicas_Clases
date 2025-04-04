<?php
    require_once 'conexion.php' ;

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $libro_id = $_POST ["id"] ;

        $sql = "SELECT * FROM libros WHERE id = $libro_id AND estado = 1" ;
        $resultado = mysqli_query($conexion , $sql) ;
        $libro = mysqli_fetch_array($resultado , MYSQLIASSOC) ;

        if($libro) {
            $sqlDelete = "DELETE FROM libros WHERE id = $libro_id" ;
            mysqli_query($conexion , $sqlDelete) ;
        }

        header("Location: index.php") ;
        exit();
    }
?>