<?php
function mayor(){
    $numeros = func_get_args();
    $mayor=$numeros[0];

    foreach ($numeros as $numero){
        if($numero > $mayor){
            $mayor = $numero;
        }
    }
    return $mayor;
}

echo mayor(7,89,2,67,90);
?>
