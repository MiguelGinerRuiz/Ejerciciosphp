
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .table-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Resumen de Datos del Formulario</h2>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $afiString = implode(", ", $_POST['aficiones']);
            $menustr = implode(", ", $_POST['menu']);

            echo '<div class="table-container">';
            echo '<table class="table table-bordered">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Campo</th>';
            echo '<th>Valor</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr><td>Nombre</td><td>' . $_POST['nombre'] . '</td></tr>';
            echo '<tr><td>Email</td><td>' . $_POST['email'] . '</td></tr>';
            echo '<tr><td>URL</td><td>' . $_POST['url'] .'</td></tr>';
            echo '<tr><td>Sexo</td><td>' . $_POST['sexo'] . '</td></tr>';
            echo '<tr><td>Número de convivientes</td><td>' . $_POST['convivientes'] . '</td></tr>';
            echo '<tr><td>Aficiones</td><td>' . $afiString . '</td></tr>';
            echo '<tr><td>Menú favorito</td><td>' . $menustr . '</td></tr>';
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
        } else {
            echo '<p>No se han enviado datos.</p>';
        }
        ?>
    </div>
</body>
</html>
