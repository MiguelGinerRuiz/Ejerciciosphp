<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Modificar Libro</title>
</head>
<body>
    <div class="container my-5">
        <div class="row mb-4">
            <div class="col-sm-8">
                <h2>Modificar <b>Libro</b></h2>
            </div>
        </div>

        <?php
        require_once "task.php";
        $pdo = conectaDb();
        $consulta = $pdo->prepare("SELECT * FROM task WHERE id=:id");
        $consulta->bindParam(':id', $_REQUEST['id']);
        $consulta->execute();
        $registro = $consulta->fetch();
        $id = $registro['id'];
        $titulo = $registro['title'];
        $descripcion = $registro['description'];
        $fecha = $registro['created_at'];
        ?>

        <form action="editar.php" method="post">
            <div class="mb-3 row">
                <label for="titulo" class="col-md-2 col-form-label">Título:</label>
                <div class="col-md-6">
                    <input type="text" name="titulo" id="titulo" class="form-control" maxlength="100" value="<?= $titulo ?>" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="descripcion" class="col-md-2 col-form-label">Descripción:</label>
                <div class="col-md-6">
                    <input type="text" name="descripcion" id="descripcion" class="form-control" maxlength="100" value="<?= $descripcion ?>" required>
                </div>
            </div>

            <input type="hidden" name="id" id="id" value="<?= $id ?>">

            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary">Guardar datos</button>
            </div>
        </form>

        <?php $pdo = null; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>