<?php

$baris = 6; 
$kolom = 5; 

for ($i = 1; $i <= $baris; $i++) {
    for ($j = 1; $j <= $kolom; $j++) {
        
        if ($i == 1 || $i == $baris || $j == 1 || $j == $kolom) {
            echo "*"; 
        } else {
            echo "&nbsp;&nbsp;&nbsp;"; 
        }
    }
    echo "<br>"; 
}
?>