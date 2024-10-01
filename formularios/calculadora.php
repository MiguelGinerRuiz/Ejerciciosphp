<?php
$x = $_GET["x"];
$y = $_GET["y"];
$suma = $x + $y;
$resta = $x - $y;
$multiplicar = $x * $y;
$division = $x / $y;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
    width: 100%;
    border-collapse: collapse; 
    margin: 20px 0;
    font-family: Arial, sans-serif;
    font-size: 16px;
    text-align: left;
}

th, td {
    padding: 12px;
    border: 1px solid #dddddd;
}

th {
    background-color: #f2f2f2;
    font-weight: bold;
}
    </style>
</head>
<body>
    <table>
        <tr>
            <td>Sumar</td>
            <td><?php echo $suma ?></td>
        </tr>
        <tr>
        <td>Restar</td>
        <td><?php echo $resta ?></td>
        </tr>
        <tr>
        <td>multiplicar</td>
        <td><?php echo $multiplicar ?></td>
        </tr>
        <tr>
        <td>dividir</td>
        <td><?php echo $division ?></td>
        </tr>
    </table>
</body>
</html>