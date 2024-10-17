
<?php


echo "<h2>Array Personas<h2>";
$coches =array(
    '111BCD'=> array('Ford','Focus','5 puertas'),
    '245XDF'=> array('Opel','Corsa','3 puertas'),
    '543GJK'=> array('Audi','A8','5 puertas'),
    '789DCG'=> array('Mercedes','Clase A','5 puertas'),
    '890TYH'=> array('Audi','A6','5 puertas')
);

foreach($coches as $mat=>$tipo)
  echo $mat." Marca: ".$tipo[0]." Tipo: ".$tipo[1]." Puertas: ".$tipo[2]."<br>";
?>