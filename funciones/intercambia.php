<?php
function intercambia(&$a,&$b){
    $aux=$a;
    $a=$b;
    $b=$aux;

     
}
$a=10;
$b=20;
intercambia($a,$b);
echo "el valor de ".$a." y el de ".$b." se han intercambiado";
?>
