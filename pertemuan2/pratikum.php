<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Gaji Karyawan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>perhitungan Gaji Karyawan</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="mb-3">
                                <label for="masa_kerja" class="form-label">Masa Kerja (tahun):</label>
                                <input id="masa_kerja" name="masa_kerja" type="number" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status Pernikahan:</label>
                                <select id="status" name="status" class="form-select" required>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Duda">Duda</option>
                                    <option value="Janda">Janda</option>
                                    <option value="Single">Single</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_anak" class="form-label">Jumlah Anak (dibawah 18 tahun):</label>
                                <input id="jumlah_anak" name="jumlah_anak" type="number" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">Hitung</button>
                        </form>
                    </div>
                </div>

                <!-- PHP Section -->
                <div class="mt-4">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $masa_kerja = $_POST['masa_kerja'];
                        $status = $_POST['status'];
                        $jumlah_anak = $_POST['jumlah_anak'];

                        // Perhitungan gaji pokok berdasarkan masa kerja
                        if ($masa_kerja > 10) {
                            $gaji_pokok = 8000000;
                        } elseif ($masa_kerja > 7) {
                            $gaji_pokok = 5000000;
                        } elseif ($masa_kerja > 5) {
                            $gaji_pokok = 3000000;
                        } elseif ($masa_kerja > 1) {
                            $gaji_pokok = 2000000;
                        } else {
                            $gaji_pokok = 0;
                        }

                        // Perhitungan tunjangan istri
                        $tunjangan_istri = 0;
                        if ($status == "Menikah") {
                            $tunjangan_istri = 0.1 * $gaji_pokok;
                        }

                        // Perhitungan tunjangan anak
                        $tunjangan_anak = 0;
                        if ($jumlah_anak > 0) {
                            $tunjangan_anak = 0.05 * $gaji_pokok * $jumlah_anak;
                        }

                        // Total penghasilan
                        $total_penghasilan = $gaji_pokok + $tunjangan_istri + $tunjangan_anak;

                        // Output hasil perhitungan
                        echo "<div class='alert alert-primary' role='alert'>";
                        echo "<strong>Gaji Pokok:</strong> Rp" . number_format($gaji_pokok, 0, ',', '.') . "<br/>";
                        echo "<strong>Tunjangan Istri:</strong> Rp" . number_format($tunjangan_istri, 0, ',', '.') . "<br/>";
                        echo "<strong>Tunjangan Anak:</strong> Rp" . number_format($tunjangan_anak, 0, ',', '.') . "<br/>";
                        echo "<strong>Total Penghasilan:</strong> Rp" . number_format($total_penghasilan, 0, ',', '.') . "<br/>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
