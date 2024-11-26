<?php

$tinggi = 5;
$lebar = 4;

for ($i = 0; $i < $tinggi; $i++) {
    
    for ($j =0; $i< $i; $j++){
        echo "&nbsp;" ;
    }
    for ($k = 0; $k < $lebar; $k++){
        echo "*";
    }
    
    echo "<br>";
}
?>
