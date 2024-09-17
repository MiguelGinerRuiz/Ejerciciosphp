
<?php


echo "<h2>Array Personas<h2>";
$personas =array(
    array('Nombre'=> 'Miguel Giner',
        'Altura'=> '1,73',
        'Emil'=>'wasabhi7@gmail.com'),
    array('Nombre'=> 'Ivan Olmos',
    'Altura'=> '1,82',
    'Emil'=>'olseas@gmail.com'),
    array('Nombre'=> 'Pau',
    'Altura'=> '1,75',
    'Emil'=>'paunav@gmail.com')
);

for ($i=0; $i<3; $i++) {
    echo $personas[$i]['Nombre']."<br>";
    echo $personas[$i]['Altura']."<br>";
    echo $personas[$i]['Emil']."<br>";

   
}
?>