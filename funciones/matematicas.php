<?php
function digitos(int $num){
$cantidad=strlen($num);
echo "La cantidad de numeros es: $cantidad ";

}
function digitoN(int $num, int $pos){
    $numero = substr($num,$pos,1);
    echo "El numero es : $numero ";
}
function quitarPorDetras(int $num, int $cant){
    $numero = substr($num,0,-$cant);
    echo "El numero que te devuelve es: $numero ";
}

function quitarPorDelante(int $num, int $cant){
    $numero = substr($num,$cant);
    echo "El numero que te devuelve es: $numero ";
}
digitos(1234567);
digitoN(7894,2);
quitarPorDetras(124326553,6);
quitarPorDelante(657890,4);
?>
