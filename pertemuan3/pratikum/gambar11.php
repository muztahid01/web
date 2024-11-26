<?php

$baris = 5; // Jumlah baris

for ($i = 1; $i <= $baris; $i++) {
    // Cetak spasi di awal setiap baris
    for ($j = $baris; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }

    // Cetak bintang dan spasi dalam pola segitiga
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        if ($i == $baris || $k == 1 || $k == (2 * $i - 1)) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }

    echo "<br>";
}
?>
