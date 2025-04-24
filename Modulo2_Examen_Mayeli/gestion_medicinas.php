<?php
    require_once 'conexion.php' ;

    // Cargar datos para los select:
    $medicinas_stock = mysqli_query($conexion , "SELECT * FROM medicamentos WHERE stock >= 1") ;

    $medicinas_sin_stock = mysqli_query($conexion , "SELECT * FROM medicamentos WHERE stock = 0") ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Medicinas</title>
    <link rel="stylesheet" href="gestion_medicinas.css">
</head>
<body>
    <form action="insert.php" method="POST">
        <fieldset>
            <legend>Añadir Medicinas</legend>

            <label for="nombre">Medicamento:</label>
            <input type="text" name="nombre" required>

            <label for="stock">Stock:</label>
            <input type="number" name="stock" required>

            <button type="submit">Añadir</button>
        </fieldset>
    </form>

    <form action="update.php" method="POST">
        <fieldset>
            <legend>Actualizar Stock</legend>

            <label for="medicina">Medicamento:</label>
            <select name="medicina" id="medicina" required>
                <option value="">Seleccionar Medicamento</option>
                <!-- Aparecer en el select como option las medicinas que existen y tienen de stock mayor o igual a 1
                Muestra el nombre de la medicina y usa el id como valor para cada opción. -->
                <?php while($row = mysqli_fetch_assoc($medicinas_stock)): ?>
                    <option value="<?= $row['id'] ?>"><?= $row['nombre'] ?> (Stock: <?= $row['stock'] ?>)</option>
                <?php endwhile; ?>
            </select>

            <label for="up_stock">Nuevo Stock:</label>
            <input type="number" name="up_stock" required>

            <button type="submit">Actualizar</button>
        </fieldset>
    </form>

    <form action="delete.php" method="POST">
        <fieldset>
            <legend>Borrar Medicinas sin Stock:</legend>

            <label for="medicina_sin_stock">Medicamento:</label>
            <select name="medicina_sin_stock" required>
            <option value="">Seleccionar Medicamento</option>
                <!-- Aparecer en el select como option las medicinas que existen  tienen 0 en stock
                Muestra el nombre de la medicina y usa el id como valor para cada opción. -->
                <?php while($row = mysqli_fetch_assoc($medicinas_sin_stock)): ?>
                    <option value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                <?php endwhile; ?>
            </select>

            <button type="submit">Borrar</button>
        </fieldset>
    </form>

    <a href="index.php">Volver a Home</a>
</body>
</html>