<?php

$filas = 6;
$columnas = 9;
$minValor = 100;
$maxValor = 999;


$numeros = array();


$numerosAleatorios = range($minValor, $maxValor);
shuffle($numerosAleatorios); 


$index = 0;
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        $numeros[$i][$j] = $numerosAleatorios[$index];
        $index++;
    }
}


$maximo = $minValor;
$minimo = $maxValor;
$columnaMax = 0;
$filaMin = 0;

for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        if ($numeros[$i][$j] > $maximo) {
            $maximo = $numeros[$i][$j];
            $columnaMax = $j;
        }
        if ($numeros[$i][$j] < $minimo) {
            $minimo = $numeros[$i][$j];
            $filaMin = $i;
        }
    }
}


echo "<table border='1' cellpadding='10' cellspacing='0'>";

for ($i = 0; $i < $filas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $columnas; $j++) {
        
        if ($i == $filaMin) {
            echo "<td style='color:green'>" . $numeros[$i][$j] . "</td>";
        } 
        
        elseif ($j == $columnaMax) {
            echo "<td style='color:blue'>" . $numeros[$i][$j] . "</td>";
        } 
        
        else {
            echo "<td style='color:black'>" . $numeros[$i][$j] . "</td>";
        }
    }
    echo "</tr>";
}

echo "</table>";
?>
