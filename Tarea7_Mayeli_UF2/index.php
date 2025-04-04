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
            <form action="" method = "POST">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre">

                <label for="correo">Correo:</label>
                <input type="email" name="correo" class="correo">

                <label for="tiempo">Tiempo de prestamo (semanas):</label>
                <input type="number" name="tiempo" class="tiempo">

                <label for="libro">Nombre de libro a prestar:</label>
                <select name="libro" class="libro">

                </select>

                <button type="submit">Solicitar libro</button>
            </form>
        </fieldset>

        <?php
            // LIBROS DISPONIBLES:
            print ("<h2>Libros Disponibles</h2>") ;
                echo " <table>" ;
                echo "<tr>" ;
                echo "<th>Título</th>" ;
                echo "<th>Autor</th>" ;
                echo "<th>Estado</th>" ;
                echo "</tr>" ;

            // LIBROS PRESTADOS:
            print ("<h2>Libros Prestados</h2>") ;
                echo " <table>" ;
                echo "<tr>" ;
                echo "<th>Usuario</th>" ;
                echo "<th>Correo</th>" ;
                echo "<th>Libro</th>" ;
                echo "<th>Tiempo(semanas)</th>" ;
                echo "<th>Estado</th>";
                echo "</tr>" ;
        ?>
    </div>
</body>
</html>

