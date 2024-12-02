<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Formulario de Datos</h2>
        <form id="formulario" method="post" action="compruebaLogin.php">
            
            
            <div class="mb-3">
                <label for="Usuario" class="form-label">Usuario:</label>
                <input type="text" class="form-control" id="Usuario" name="Usuario">
            </div>

            
            <div class="mb-3">
                <label for="contra" class="form-label">contraseña:</label>
                <input type="contra" class="form-control" id="contra" name="contra">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
</body>