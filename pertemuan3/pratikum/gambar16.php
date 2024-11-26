<?php

$lebar_pola = 4; // Jumlah baris pada pola

for ($i = 0; $i < $lebar_pola; $i++) {
    // Cetak spasi di awal setiap baris untuk membuat segitiga
    for ($j = $lebar_pola - $i; $j > 1; $j--) {
        echo "&nbsp;&nbsp;";
    }

    $number = 1;

    // Cetak angka dalam pola segitiga Pascal
    for ($k = 0; $k <= $i; $k++) {
        echo $number . "&nbsp;&nbsp;";
        $number = $number * ($i - $k) / ($k + 1); // Hitung angka berikutnya dalam baris
    }

    echo "<br>"; // Pindah ke baris berikutnya
}
?>
