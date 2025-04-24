<?php
    require_once 'conexion.php' ;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['medicina']) && isset($_POST['up_stock'])) {
            // intval = Evitan la entrada de datos maliciosos o vacíos.
            $id = intval($_POST['medicina']); 
            $nuevo_stock = intval($_POST['up_stock']);
    
            $query = "UPDATE medicamentos SET stock = $nuevo_stock WHERE id = $id";
            mysqli_query($conexion, $query);
        }
    }
    
    header("Location: gestion_medicinas.php");
    exit();
?>