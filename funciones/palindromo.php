<?php
function esPalindroma($frase) {
    $fraseLimpia = strtolower(str_replace(' ', '', $frase));
    
    $fraseInvertida = strrev($fraseLimpia);
    
    return $fraseLimpia === $fraseInvertida;
}

$frase = "ligar es ser agil";
if (esPalindroma($frase)) {
    echo "La frase \"$frase\" es palíndroma.";
} else {
    echo "La frase \"$frase\" no es palíndroma.";
}
?>
