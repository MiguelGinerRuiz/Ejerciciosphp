
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de Libros</h2></div>

                </div>
            </div>
<?php
  require_once "task.php";
  $pdo=conectaDb();


  $consulta = $pdo->prepare("SELECT * FROM task ");
  echo "<table class='table'><thead>";
  echo "<tr> <th scope='col'>titulo</th><th scope='col'>descripcion</th><th scope='col'>Fecha</th></tr>";
  echo "</thead><tbody>";
  $consulta->execute();
  while($registro = $consulta->fetch())
    {
      $titulo=$registro['title'];
    
    echo "<tr><td>".$registro['title']."</td><td>".$registro['description']."</td><td>".$registro['created_at'].
    "</td><td><a href=borrar.php?id=".$registro['id']."><img src='trash-sharp.svg' width='32' height='32'></a>".
    "<a href=formulario.php?id=".$registro['id']."><img src='briefcase-sharp.svg' width='32' height='32'></a></td>".
    "</tr>";
    }
  echo "</tbody></table>";
  $pdo = null;
  ?>