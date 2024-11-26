<?php
    echo ("<h3>Aplikasi Menghitung Luas dan Keliling Persegi Panjang</h3>");
    echo ("<br/>");

    // Ambil nilai dari form
    $panjang = isset($_POST['panjang']) ? $_POST['panjang'] : 0;
    $lebar = isset($_POST['lebar']) ? $_POST['lebar'] : 0;

    // Validasi input
    if (is_numeric($panjang) && is_numeric($lebar)) {
        // Hitung luas dan keliling
        $luas = $panjang * $lebar;
        $kel = (2 * $panjang) + (2 * $lebar);

        // Output
        echo ("Panjang: " . $panjang);
        echo ("<br/>");
        echo ("Lebar: " . $lebar);
        echo ("<br/>");
        echo ("Luas: " . $luas);
        echo ("<br/>");
        echo ("Keliling: " . $kel);
    } else {
        echo "Harap masukkan angka yang valid.";
    }
?>
