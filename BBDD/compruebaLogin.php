<?php 
session_start();
$datos = [
    'usuario' => 'Miguel',
    'contraseña' => '12345',
];

if ($_POST['Usuario']==$datos['usuario'] && $_POST['contra']==$datos['contraseña']  ){
    $_SESSION['usuario'] = $datos['usuario'];
    header("Location:ok.php");
}else{
    header("Location:ko.php");
}


?>