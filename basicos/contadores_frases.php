<?php
echo "<h1>Contadores</h1>";
$cantidad=100;
$i=0;
echo "Este contador va del 1 al 100 <br>";
for ($i=0; $i<$cantidad; $i++){
   echo $i.",";

}
echo "Este otro va del 10 al 0 <br>";
$d=10;
while ($d>=0){
echo $d;
if($d>0){
    echo "-";
}
 $d--;
}
?>