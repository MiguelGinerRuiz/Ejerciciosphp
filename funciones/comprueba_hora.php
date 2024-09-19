<?php
function compruebaHora($hora){

    $tiempo = explode(":", $hora);

    
    if (count($tiempo) != 3) {
        echo "El formato $hora está mal";
        return;
    }

    list($horas, $minutos, $segundos) = $tiempo;

    if ($horas < 0 || $horas > 23) {
        echo "Las horas $hora están mal";
    } elseif ($minutos < 0 || $minutos > 59) {
        echo "Los minutos $hora están mal";
    } elseif ($segundos < 0 || $segundos > 59) {
        echo "Los segundos $hora están mal";
    } else {
        echo "La hora $hora está bien";
    }
}

compruebaHora("12:34:27"); 
?>
