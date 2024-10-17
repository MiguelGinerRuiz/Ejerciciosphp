<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['boton'])) {

    $nombre = $_POST["Nombre"];
    $nota1 = $_POST["1tr"];
    $nota2 = $_POST["2tr"];
    $nota3 = $_POST["3tr"];
    $media = ($nota1 + $nota2 + $nota3) / 3;

    $_SESSION['alumnos'][] = [
        'nombre' => $nombre,
        'nota1' => $nota1,
        'nota2' => $nota2,
        'nota3' => $nota3,
        'media' => $media
    ];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sesion'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Notas</title>
    <style>
        * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

body {
    background-color: #f9f9f9;
    padding: 20px;
    text-align: center;
}

h2 {
    color: #333;
    margin-bottom: 20px;
}

table {
    width: 80%;
    margin: 0 auto 20px auto;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: center;
}

th {
    background-color: #007bff;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

button {
    background-color: #dc3545;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #c82333;
}

a {
    display: inline-block;
    margin-top: 10px;
    text-decoration: none;
    color: #007bff;
}

a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <h2>Listado de Alumnos y Notas:</h2>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Media</th>
        </tr>
        <?php
        if (isset($_SESSION['alumnos'])) {
            foreach ($_SESSION['alumnos'] as $alumno) {
                echo "<tr>";
                echo "<td>{$alumno['nombre']}</td>";
                echo "<td>{$alumno['nota1']}</td>";
                echo "<td>{$alumno['nota2']}</td>";
                echo "<td>{$alumno['nota3']}</td>";
                echo "<td>" . number_format($alumno['media'], 2) . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>


    <form method="POST" action="">
        <button type="submit" name="sesion">Borrar todo</button>
    </form>

    <p><a href="calificaciones_view.php">Volver al formulario</a></p>
</body>
</html>
