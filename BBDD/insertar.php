<?php
  require_once "task.php";



    $pdo=conectaDb();


    $insercion = $pdo->prepare("INSERT INTO task(title, description,created_at) VALUES(:titulo, :descripcion,:fecha)");
                 $insercion->bindParam(':titulo', $_REQUEST['titulo']);
                 $insercion->bindParam(':descripcion', $_REQUEST['descripcion']);
                 $insercion->bindParam(':fecha', $_REQUEST['fecha']);
             

    if(!$insercion->execute()) 
        echo "<p class=\"aviso\">Error al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()}</p>\n";
    
   


$pdo = null;
header("Location:inicio.php");

?>