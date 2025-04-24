<?php
    require_once 'conexion.php';

    $medicinas = [];
    $medicina_seleccionada = null;

    // Obtener todas las medicinas
    $query = "SELECT * FROM medicamentos";
    $result = mysqli_query($conexion, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $medicinas[] = $row;
    }

    // Si se selecciona una medicina, obtener sus datos
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['medicina'])) {
        $id_medicina = $_GET['medicina'];
        $query_detalle = "SELECT * FROM medicamentos WHERE id = $id_medicina";
        $result_detalle = mysqli_query($conexion, $query_detalle);
        if (mysqli_num_rows($result_detalle) > 0) {
            $medicina_seleccionada = mysqli_fetch_assoc($result_detalle);
        }
    }
?>