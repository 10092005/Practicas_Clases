<?php include 'buscar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <h1>Farmacia</h1>
    <h2>Buscar Medicinas</h2>

    <form method="GET" action="">
        <label for="medicina">Selecciona una medicina:</label>
        <!-- Aparecer en el select como option las medicinas que existen en base de datos -->
        <select name="medicina" id="medicina" required>
            <option value="">-- Selecciona --</option>
            <!-- Este código es un ciclo foreach que recorre el array $medicinas y crea una opción (<option>) en un select para cada medicina.
                    $medicina['id']: Valor de cada medicina (utilizado en el atributo value del <option>).
                    $medicina['nombre']: Nombre de la medicina, que se muestra en el desplegable.
                    selected: Si la variable $id_medicina coincide con el id de la medicina actual, se agrega el atributo selected para que esa opción aparezca seleccionada por defecto. -->
            <?php foreach ($medicinas as $medicina): ?>
                <option value="<?= $medicina['id'] ?>"
                    <?= isset($id_medicina) && $id_medicina == $medicina['id'] ? 'selected' : '' ?>>
                    <?= $medicina['nombre'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Buscar</button>
    </form>

    <?php if ($medicina_seleccionada): ?>
        <h3>Resultado:</h3>
        <!-- Imprimir la informaciòn de la medicina buscada // Al hacer click en el boton "Buscar" -->
        <p><strong>Nombre:</strong> <?= $medicina_seleccionada['nombre'] ?></p>
        <p><strong>Stock:</strong> <?= $medicina_seleccionada['stock'] ?></p>
    <?php endif; ?>

    <br><br>
    <a href="gestion_medicinas.php">Gestionar Medicinas</a>
</body>
</html>