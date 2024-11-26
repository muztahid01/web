<?php

$lebar_diamond = 4; // Ubah Lebar diamond menjadi 4

// Bagian atas diamond (4 baris)
for ($i = 1; $i <= $lebar_diamond; $i++) {
    // Cetak spasi
    for ($j = $lebar_diamond; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }

    // Cetak bintang
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}

// Bagian bawah diamond (3 baris)
for ($i = $lebar_diamond - 1; $i >= 1; $i--) {
    // Cetak spasi
    for ($j = $lebar_diamond; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }

    // Cetak bintang
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>
