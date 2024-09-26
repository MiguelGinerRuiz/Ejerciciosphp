<?php
$fichero = fopen("casas_rurales.csv", "r");

$id = [];
$casaSinTelefono = 0;
while (($linea = fgets($fichero)) !== FALSE) {
    $campos = str_getcsv($linea); 
    $campos = explode(";", $linea);
    if (count($campos) >= 12) {
        $idCasa = $campos[0];         
        $localidad = $campos[1];                 
        $nombre = $campos[3];      
        $telefono = $campos[9];      


        if (!empty($telefono)) { 
            $id[$idCasa][] = [
                'id' => $idCasa,
                'localidad' => $localidad,
                'nombre' => $nombre,
                'telefono' => $telefono,
            ];
        }else{
            $casaSinTelefono ++;
        }
    }
}

fclose($fichero);

?>

