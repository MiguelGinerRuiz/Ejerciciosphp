<?php
function analizarFrase($frase) {

        $cantidadPalabras = str_word_count($frase);
        

        $letrasTotales = strlen(str_replace(' ', '', $frase));
        

        
        echo "Letras totales: $letrasTotales\n";
        echo "Cantidad de palabras: $cantidadPalabras\n";

    }
    $frase = "Hola este es un ejemplo";
    analizarFrase($frase);
    
?>
