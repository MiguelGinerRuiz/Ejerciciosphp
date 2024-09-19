<?php
function cuenta($a,$b){
    for($i=$a;$i<$b;$i++){
    if ($a!=$b){
        $a++;
        echo $a.",";
    }
}
}
cuenta(10,20);
?>
