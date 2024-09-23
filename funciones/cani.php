<?php
function frases($frase){

    $contador = 0;
    
    for($i=0; $i < strlen($frase); $i++) {
        if($frase[$i] == ' ') {

            echo $frase[$i];
        } else {

            if($contador % 2 == 0){
                echo strtoupper($frase[$i]);
            } else {
                echo ($frase[$i]);
            }

            $contador++;
        }
    }
}


frases("Escribe una función que transforme una cadena en cani");
?>
