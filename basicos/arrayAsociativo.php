<?php
$cantidad=100;


for ($i=0; $i<$cantidad; $i++){
    $num = rand(0,1);
   if ($num==0){
    $letras[$i]="F";
   }else{
    $letras[$i]="M";
   }
}


$numeros["M"]=0;
$numeros["F"]=0;
echo "<h2>Lista Desordenada<h2>";

for ($i=0; $i<count($letras); $i++){
    $num = $letras[$i];
   if ($num=="F"){
    $numeros["F"]+=1;
   }elseif($num=="M"){
    $numeros["M"]+=1;
   }
}

print_r($numeros);
?>