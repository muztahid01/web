<?php

$baris = 5; 
for ($i = 1; $i <= $baris; $i++) {
    for ($j = $baris; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }

    
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        if ($k == 1 || $k == (2 * $i - 1)) {
            echo "*"; 
        } else {
            echo "&nbsp;&nbsp;"; 
        }
    }

    echo "<br>"; 
}

for ($i = $baris - 1; $i >= 1; $i--) {
    
    for ($j = $baris; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }

    
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        if ($k == 1 || $k == (2 * $i - 1)) {
            echo "*";  
        } else {
            echo "&nbsp;&nbsp;"; 
        }
    }

    echo "<br>";
}
?>
