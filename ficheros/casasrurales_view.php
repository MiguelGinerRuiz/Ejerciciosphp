<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casas con Teléfono</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        p{
            border: 1px solid black;
        }
    </style>
</head>
<body>

<h1>Listado de Casas Rurales con Teléfono</h1>

<?php include 'Casas_RuralesTelefonos.php'; ?>


<table>
    <tbody>
        <?php if (!empty($id)): ?>
            <?php foreach ($id as $casas): ?>
                <?php foreach ($casas as $hogar): ?>
                    <tr>
                        <td><?php echo $hogar['id']; ?></td>
                        <td><?php echo $hogar['localidad']; ?></td>
                        <td><?php echo $hogar['nombre']; ?></td>
                        <td><?php echo $hogar['telefono']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No se encontraron casas con teléfono.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<p><strong>Total de casas que no tienen teléfono:</strong> <?php echo $casaSinTelefono; ?></p>

</body>
</html>
