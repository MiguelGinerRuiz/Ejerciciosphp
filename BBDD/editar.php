<?php

require_once "task.php";
$pdo=conectaDb();

$insercion = $pdo->prepare("update task set title=:titulo, description=:descripcion, created_at=:fecha where id=:id");
$insercion->bindParam(':id', $_REQUEST['id']);
$insercion->bindParam(':titulo', $_REQUEST['titulo']);
$insercion->bindParam(':descripcion', $_REQUEST['descripcion']);
$insercion->bindParam(':fecha', $_REQUEST['fecha']);




if(!$insercion->execute()) 
echo "<p class=\"aviso\">Error al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()}</p>\n";


$pdo = null;
header("Refresh:1; url=inicio.php");

echo '<p>En breve le redirigiremos al listado.</p>';

?>