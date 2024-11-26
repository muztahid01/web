<?php
// Tinggi Floyd's Triangle
$n = 4;
$number = 1; // Inisialisasi angka awal

// Loop untuk setiap baris
for ($i = 1; $i <= $n; $i++) {
    // Loop untuk mencetak angka dalam setiap baris
    for ($j = 1; $j <= $i; $j++) {
        echo $number . " "; // Cetak angka
        $number++; // Increment angka
    }
    echo "<br>"; // Pindah ke baris berikutnya
}
?>
