<?php

$recordar = $_POST['recordar'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['Usuario'];
    $contra = $_POST['contra'];
if(isset($recordar)){
setcookie('usuario',$usuario);
setcookie('contra',$contra);
}

}
echo "Bienvenido ". $usuario;


?>