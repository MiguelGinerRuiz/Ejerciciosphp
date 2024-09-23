<?php
function frases($frase){
    
for($i=0;$i<=strlen($frase);$i++){
    if($i%2==1){
        echo $frase[$i];
    }
}
}
frases("Holaadios");
?>
