<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'carro.php';?>
    <h1>Lista de Artículos</h1>
    <ul>
        <?php foreach ($articulos as $articulo): ?>
            <li>
                <form method="POST">
                    <button type="submit" name="articulo_id" value="<?php echo $articulo['id']; ?>">
                        <?php echo $articulo['nombre']; ?> - $<?php echo $articulo['precio']; ?>
                    </button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
    <h2 id="total">Total: $<?php echo $_SESSION['total']; ?></h2>

    <form method="POST">
        <button type="submit" name="eliminar_sesion">Eliminar sesión</button>
    </form>
</body>
</html>