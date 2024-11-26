<?php
// Array untuk menyimpan daftar produk dan harga
$produk = array(
    "Laptop" => 10000000,
    "Handphone" => 5000000,
    "TV" => 3000000
);

// Fungsi untuk menambah produk
function tambahProduk($nama, $harga) {
    global $produk;
    $produk[$nama] = $harga;
}

// Fungsi untuk menghapus produk
function hapusProduk($nama) {
    global $produk;
    if (isset($produk[$nama])) {
        unset($produk[$nama]);
    } else {
        echo "<div class='alert alert-warning'>Produk tidak ditemukan.</div>";
    }
}

// Fungsi untuk memperbarui harga produk
function updateHarga($nama, $hargaBaru) {
    global $produk;
    if (isset($produk[$nama])) {
        $produk[$nama] = $hargaBaru;
    } else {
        echo "<div class='alert alert-warning'>Produk tidak ditemukan.</div>";
    }
}

// Menampilkan daftar produk
function tampilkanProduk() {
    global $produk;
    echo "<h3>Daftar Produk:</h3>";
    echo "<ul class='list-group'>";
    foreach ($produk as $nama => $harga) {
        echo "<li class='list-group-item'>Produk: $nama, Harga: Rp " . number_format($harga, 0, ',', '.') . "</li>";
    }
    echo "</ul><br>";
}

// Cek apakah ada input dari pengguna (simulasi form submission)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['tambah'])) {
        // Menambah produk
        tambahProduk($_POST['produk'], $_POST['harga']);
    } elseif (isset($_POST['hapus'])) {
        // Menghapus produk
        hapusProduk($_POST['produk']);
    } elseif (isset($_POST['update'])) {
        // Memperbarui harga produk
        updateHarga($_POST['produk'], $_POST['harga']);
    }
}

// Menampilkan produk terbaru setelah operasi
tampilkanProduk();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daftar Belanja Produk</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="my-4">Daftar Belanja Produk</h1>

    <form method="POST" class="mb-3">
        <h3>Tambah Produk Baru</h3>
        <div class="mb-3">
            <label for="produk" class="form-label">Nama Produk:</label>
            <input type="text" name="produk" id="produk" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Produk:</label>
            <input type="number" name="harga" id="harga" class="form-control" required>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary">Tambah Produk</button>
    </form>

    <form method="POST" class="mb-3">
        <h3>Hapus Produk</h3>
        <div class="mb-3">
            <label for="hapus-produk" class="form-label">Nama Produk:</label>
            <input type="text" name="produk" id="hapus-produk" class="form-control" required>
        </div>
        <button type="submit" name="hapus" class="btn btn-danger">Hapus Produk</button>
    </form>

    <form method="POST" class="mb-3">
        <h3>Update Harga Produk</h3>
        <div class="mb-3">
            <label for="update-produk" class="form-label">Nama Produk:</label>
            <input type="text" name="produk" id="update-produk" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="harga-baru" class="form-label">Harga Baru:</label>
            <input type="number" name="harga" id="harga-baru" class="form-control" required>
        </div>
        <button type="submit" name="update" class="btn btn-warning">Update Harga</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
