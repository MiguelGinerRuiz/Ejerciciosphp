

<?php
$cantidad=50;
$numeros=array();

echo "<h2>Lista Desordenada<h2>";

while (count($numeros)<$cantidad){
    $numeros[] = rand(0,99);
   
}
$media=array_sum($numeros)/50;
sort($numeros);
$bajo=$numeros[0];
$alto=$numeros[49];
echo "Media: " . $media . "<br>";
echo "Bajo: ". $bajo . "<br>";
echo"Alto: ".$alto . "<br>";
?>