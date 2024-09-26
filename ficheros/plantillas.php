<?php


$fichero = fopen("plantillas.csv", "r");


$equipos = [];


while (($linea = fgets($fichero)) !== FALSE) {
    $linea = trim($linea); 
    $campos = explode(",", $linea);


    if (count($campos) >= 12) {
        $equipo = $campos[1];         
        $dorsal = $campos[11];        
        $nombre = $campos[4];         
        $apellidos = $campos[5];      
        $posicion = $campos[10];      


        $equipos[$equipo][] = [
            'dorsal' => $dorsal,
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'posicion' => $posicion,
        ];
    }
}


fclose($fichero);


function mostrarJugadores($equipos, $equipoBuscado) {
    if (isset($equipos[$equipoBuscado])) {
        
        foreach ($equipos[$equipoBuscado] as $jugador) {
            echo "{$jugador['dorsal']} {$jugador['nombre']} {$jugador['apellidos']} {$jugador['posicion']}<br>"
                  ;
        }
    } else {
        echo "No se encontraron jugadores para el equipo: $equipoBuscado.";
    }
}


?>
