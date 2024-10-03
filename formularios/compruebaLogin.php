<?php 
$datos = [
    'usuario' => 'Miguel',
    'contraseña' => '12345',
];

if ($_POST['Usuario']==$datos['usuario'] && $_POST['contra']==$datos['contraseña']  ){
    header("Location:ok.php");
}else{
    header("Location:ko.php");
}


?>