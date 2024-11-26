<?php

$lebar_pola = 4; // Jumlah bintang pada pola terpanjang

// Bagian atas pola
for ($i = 0; $i < $lebar_pola; $i++) {
    // Cetak spasi di awal setiap baris
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;";
    }

    // Cetak bintang
    for ($k = $lebar_pola; $k > $i; $k--) {
        echo "*";
    }

    echo "<br>";
}

// Bagian bawah pola
for ($i = $lebar_pola - 2; $i >= 0; $i--) {
    // Cetak spasi di awal setiap baris
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;";
    }

    // Cetak bintang
    for ($k = $lebar_pola; $k > $i; $k--) {
        echo "*";
    }

    echo "<br>";
}
?>
