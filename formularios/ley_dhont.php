<?php
$pp = $_POST['partido1'];
$psoe = $_POST['partido2'];
$vox = $_POST['partido3'];
$ciudadanos = $_POST['partido4'];
$votos1 = $_POST['votos1'];
$votos2 = $_POST['votos2'];
$votos3 = $_POST['votos3'];
$votos4 = $_POST['votos4'];
$escaños = $_POST['escanyos'];

$valores = [];

for ($i = 1; $i <= $escaños; $i++) {
    $valores[] = ['valor' => $votos1 / $i, 'partido' => 'pp', 'escaño' => $i];
    $valores[] = ['valor' => $votos2 / $i, 'partido' => 'psoe', 'escaño' => $i];
    $valores[] = ['valor' => $votos3 / $i, 'partido' => 'vox', 'escaño' => $i];
    $valores[] = ['valor' => $votos4 / $i, 'partido' => 'ciudadanos', 'escaño' => $i];
}

usort($valores, function ($a, $b) {
    return $b['valor'] <=> $a['valor'];
});

$mayores_valores = array_slice($valores, 0, 7);

function es_mayor($valor, $mayores_valores) {
    foreach ($mayores_valores as $mayor) {
        if ($mayor['valor'] == $valor) {
            return true;
        }
    }
    return false;
}

echo '<table border="1">';
echo '<thead>';
echo    '<tr>';
echo        '<th></th>'; 
echo        '<th>' . $pp . '</th>';
echo        '<th>' . $psoe . '</th>';
echo        '<th>' . $vox . '</th>';
echo        '<th>' . $ciudadanos . '</th>';
echo    '</tr>';
echo '</thead>';
echo '<tbody>';

echo    '<tr>';
echo        '<th>Votos</th>';
echo        '<td>' . $votos1 . '</td>';
echo        '<td>' . $votos2 . '</td>';
echo        '<td>' . $votos3 . '</td>';
echo        '<td>' . $votos4 . '</td>';
echo    '</tr>';

for ($i = 1; $i <= $escaños; $i++) {
    echo    '<tr>';
    echo        '<th>Escaño ' . $i . '</th>'; 
    $valor1 = $votos1 / $i;
    $valor2 = $votos2 / $i;
    $valor3 = $votos3 / $i;
    $valor4 = $votos4 / $i;

   
    if (es_mayor($valor1, $mayores_valores)) {
        echo '<td style="background-color: yellow;">' . number_format($valor1, 2) . '</td>';
    } else {
        echo '<td>' . number_format($valor1, 2) . '</td>';
    }

    if (es_mayor($valor2, $mayores_valores)) {
        echo '<td style="background-color: yellow;">' . number_format($valor2, 2) . '</td>';
    } else {
        echo '<td>' . number_format($valor2, 2) . '</td>';
    }

    if (es_mayor($valor3, $mayores_valores)) {
        echo '<td style="background-color: yellow;">' . number_format($valor3, 2) . '</td>';
    } else {
        echo '<td>' . number_format($valor3, 2) . '</td>';
    }

    if (es_mayor($valor4, $mayores_valores)) {
        echo '<td style="background-color: yellow;">' . number_format($valor4, 2) . '</td>';
    } else {
        echo '<td>' . number_format($valor4, 2) . '</td>';
    }

    echo    '</tr>';
}

echo '</tbody>';
echo '</table>';
?>
