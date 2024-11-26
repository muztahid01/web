<?php

$lebar_pola = 4; 

// Bagian atas pola
for ($i = 0; $i < $lebar_pola; $i++) {
    // Cetak spasi di awal setiap baris
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;";
    }

    // Cetak bintang
    for ($k = 0; $k < $lebar_pola - $i; $k++) {
        if ($k == 0 || $k == ($lebar_pola - $i - 1) || $i == $lebar_pola - 1) {
            echo "*"; // Cetak bintang di tepi dan baris terakhir
        } else {
            echo "&nbsp;&nbsp;"; // Cetak spasi di dalam
        }
    }

    echo "<br>"; // Pindah ke baris berikutnya
}

// Bagian bawah pola
for ($i = $lebar_pola - 2; $i >= 0; $i--) {
    // Cetak spasi di awal setiap baris
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;";
    }

    // Cetak bintang
    for ($k = 0; $k < $lebar_pola - $i; $k++) {
        if ($k == 0 || $k == ($lebar_pola - $i - 1) || $i == 0) {
            echo "*"; // Cetak bintang di tepi dan baris pertama
        } else {
            echo "&nbsp;&nbsp;"; // Cetak spasi di dalam
        }
    }

    echo "<br>"; // Pindah ke baris berikutnya
}
?>
