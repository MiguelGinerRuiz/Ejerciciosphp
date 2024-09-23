<?php
function analizarFrase($frase) {

        $palabras = explode(" ", trim($frase));
        

        $palabras = array_filter($palabras, fn($p) => $p !== "");
        

        $letrasTotales = strlen(str_replace(' ', '', $frase));
        
        $cantidadPalabras = count($palabras);
        

        echo "Letras totales: $letrasTotales\n";
        echo "Cantidad de palabras: $cantidadPalabras\n";

    }
    
    $frase = "Hola este es un ejemplo";
    analizarFrase($frase);
    
?>
