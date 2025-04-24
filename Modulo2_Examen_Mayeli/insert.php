<?php
    require_once 'conexion.php' ;

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'] ;
        $stock = $_POST['stock'] ;

        $query = "INSERT INTO medicamentos (nombre , stock) VALUES ('$nombre' , '$stock')" ;
        
        mysqli_query($conexion , $query) ;
    }
    
    // Te redirige a la pagina luego de enviar el formulario
    header("Location: gestion_medicinas.php");
    exit();

?>