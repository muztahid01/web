<?php
$n = 5;


for ($i = 0; $i < $n; $i++) {
    
    echo str_repeat("  ", $i);
    
    echo str_repeat("* ", $n - $i);
    echo "<br>";
}
?>
