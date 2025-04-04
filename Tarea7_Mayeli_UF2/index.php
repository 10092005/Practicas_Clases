<?php
    require_once 'conexion.php' ;
    // Libros Disponibles
    $sqlLibros = "SELECT * FROM libros WHERE estado = 0" ;
    $resultLibros = mysqli_query($conexion , $sqlLibros);

    // Libros prestados
    $sqlPrestamos = "SELECT prestamos.id , prestamos.nombre , prestamos.correo , libros.titulo , prestamos.tiempo FROM prestamos JOIN libros ON prestamos.libro_id = libros.id";
    $resultPrestamos = mysqli_query($conexion , $sqlPrestamos);

    // Mostrar libros disponibles
    $sqlLibrosDisponibles = "SELECT * FROM libros WHERE estado = 0";
    $resultLibrosDisponibles = mysqli_query($conexion , $sqlLibrosDisponibles);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>GESTION DE BIBLIOTECA</h1>
    <div class="container">
        <div class ="right-column">
            <fieldset>
                <legend>Registrar nuevo libro:</legend>
                <form action="insert_libro.php" method = "POST">
                    <label for="titulo">Insertar nombre del libro:</label>
                    <input type="text" name="titulo" class="titulo">

                    <label for="autor">Insertar autor del libro:</label>
                    <input type="text" name="autor" class="autor">

                    <button type="submit">Registrar</button>
                </form>
            </fieldset>

            <fieldset>
                <legend>Registro para prestar libros:</legend>
                <form action="update_libroPrestado.php" method = "POST">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre">

                    <label for="correo">Correo:</label>
                    <input type="email" name="correo" class="correo">

                    <label for="tiempo">Tiempo de prestamo (semanas):</label>
                    <input type="number" name="tiempo" class="tiempo">

                    <label for="libro">Nombre de libro a prestar:</label>
                    <select name="libro" class="libro">
                        <?php
                            while ($libro = mysqli_fetch_array($resultLibros, MYSQLI_ASSOC)) {
                                echo '<option value="' . $libro['id'] . '">' . $libro['titulo'] . '</option>';
                            }
                        ?>

                    </select>

                    <button type="submit">Solicitar libro</button>
                </form>
            </fieldset>
        </div>

        <div class ="left-column">
            <?php
                // LIBROS DISPONIBLES:
                print ("<h2>Libros Disponibles</h2>") ;
                    echo '<table>';
                    echo '<tr><th>Título</th><th>Autor</th><th>Base de datos</th></tr>';

                    while ($libroDisponible = mysqli_fetch_array($resultLibrosDisponibles, MYSQLI_ASSOC)) {
                    
                    echo '<tr>';
                    echo '<td>' . $libroDisponible['titulo'] . '</td>';
                    echo '<td>' . $libroDisponible['autor'] . '</td>';
                    echo '<td>';
                    echo '<form action="delete_libro.php" method="POST">';
                    echo '<input type="hidden" name="libro_id" value="' . $libroDisponible['id'] . '">';
                    echo '<button type="submit">Borrar</button>';
                    echo '</form>';
                    echo '</td>';
                    echo '</tr>';
                }
                echo '</table>';

                // LIBROS PRESTADOS:
                print ("<h2>Libros Prestados</h2>") ;
                    echo '<table border="1">';
                    echo '<tr><th>Usuario</th><th>Correo</th><th>Libro</th><th>Tiempo prestamo</th><th>Estado</th></tr>';

                    while ($prestamo = mysqli_fetch_array($resultPrestamos, MYSQLI_ASSOC)) {

                    echo '<tr>';
                    echo '<td>' . $prestamo['nombre'] . '</td>';
                    echo '<td>' . $prestamo['correo'] . '</td>';
                    echo '<td>' . $prestamo['titulo'] . '</td>';
                    echo '<td>' . $prestamo['tiempo'] . " semanas" . '</td>';
                    echo '<td>';
                    echo '<form action="update_libroDisponible.php" method="POST">';
                    echo '<input type="hidden" name="id" value="' . $prestamo['id'] . '">';
                    echo '<button type="submit">Devolver</button>';
                    echo '</form>';
                    echo '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            ?>
        </div>
    </div>
</body>
</html>

