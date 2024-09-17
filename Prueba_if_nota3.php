<?php
$nota1 = 7.5;
$nota2 = 3.7;
$nota3 = 8.9;
if ($nota1 > $nota2 and $nota1 > $nota3)
{
    echo "La nota del examen $nota1 es la mayor";
}
elseif ($nota2 > $nota1 and $nota2 > $nota3 )
{
    echo "La nota del examen $nota2 es la mayor";
}
else
{
    echo "La nota del examen $nota3 es la mayor";
}
?>
