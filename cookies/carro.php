<?php
session_start();
$articulos = array(
    array("id"=>1,"nombre"=>"Zapatillas Nike","precio"=>60),
    array("id"=>2,"nombre"=>"Sudadera Domyos","precio"=>15),
    array("id"=>3,"nombre"=>"Pala de pádel Vairo","precio"=>50),
    array("id"=>4,"nombre"=>"Pelota de baloncesto Molten","precio"=>20)
);

if (!isset($_SESSION['total'])) {
    $_SESSION['total'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['eliminar_sesion'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['articulo_id'])) {
    $articulo_id = $_POST['articulo_id'];
    foreach ($articulos as $articulo) {
        if ($articulo['id'] == $articulo_id) {
            $_SESSION['total'] += $articulo['precio'];
            break;
        }
    }
}


?>
