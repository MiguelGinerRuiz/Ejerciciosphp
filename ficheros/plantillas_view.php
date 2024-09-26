<?php
include 'plantillas.php';
$equipoBuscado = "Atlético de Madrid";
    
    if (isset($equipos[$equipoBuscado])) {
        echo "<h3>Jugadores de $equipoBuscado:</h3>";
        echo "<table border='1'>";
        echo "<tr><th>Dorsal</th><th>Nombre</th><th>Apellidos</th><th>Posición</th></tr>";
        
        foreach ($equipos[$equipoBuscado] as $jugador) {
            echo "<tr>
                    <td>{$jugador['dorsal']}</td>
                    <td>{$jugador['nombre']}</td>
                    <td>{$jugador['apellidos']}</td>
                    <td>{$jugador['posicion']}</td>
                  </tr>";
        }
        echo "</table>";
    }else {

        echo "No se encontraron jugadores para el equipo: $equipoBuscado.";
    }





?>
