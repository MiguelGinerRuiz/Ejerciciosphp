
<?php

if (isset($_COOKIE["user"])) {
    echo "Hola, " . $_COOKIE["user"] . "! Bienvenido de nuevo.";
} else {
    $nombre = "Miguel"; 
    setcookie("user", $nombre, time() + 1000);
    echo "La cookie 'user' ha sido creada. Refresca la página para ver tu nombre.";
}
?>