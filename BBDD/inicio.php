<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
$usuario = $_SESSION['usuario']; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Agregar Libro</title>
</head>
<body>
    <div class="container my-5">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div></div> 
            <div class="text-end">
                <small class="text-muted me-3">Bienvenido, <strong><?= htmlspecialchars($usuario) ?></strong>!</small>
                <a href="logout.php" class="btn btn-outline-danger btn-sm">Cerrar Sesión</a>
            </div>
        </div>

        
        <div class="row mb-4">
            <div class="col-sm-8">
                <h2>Agregar <b>Libro</b></h2>
            </div>
        </div>

        <form action="insertar.php" method="post">
            <div class="mb-3 row">
                <label for="titulo" class="col-md-2 col-form-label">Título:</label>
                <div class="col-md-6">
                    <input type="text" name="titulo" id="titulo" class="form-control" maxlength="100" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="descripcion" class="col-md-2 col-form-label">Descripción:</label>
                <div class="col-md-6">
                    <input type="text" name="descripcion" id="descripcion" class="form-control" maxlength="100" required>
                </div>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary">Guardar datos</button>
            </div>
        </form>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php
include("listar.php");
?>