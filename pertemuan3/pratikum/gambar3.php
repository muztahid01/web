<?php
$tinggi = 5; // Tinggi segitiga
for ($i = 1; $i <= $tinggi; $i++) {
    echo str_repeat("&nbsp;", $tinggi - $i);
    echo str_repeat("* ", $i);
    echo "<br>";
 }
?>