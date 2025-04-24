<?php
    require_once 'conexion.php' ;

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['medicina_sin_stock'] ;

        // Eliminar medicamentos que tienen el stock = 0
        $query = "DELETE FROM medicamentos WHERE id = $id AND stock = 0" ;

        mysqli_query($conexion , $query) ;
    }

    header("Location: gestion_medicinas.php");
    exit();
?>