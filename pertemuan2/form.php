<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Akhir</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Form Nilai Akhir</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="mb-3">
                                <label for="nilai" class="form-label">Nilai Akhir:</label>
                                <input id="nilai" name="nilai" type="text" class="form-control" required>
                            </div>
                            <input id="kirim" name="kirim" type="hidden" value="1"/>
                            <button type="submit" class="btn btn-dark w-100">Submit</button>
                        </form>
                    </div>
                </div>

                <!-- PHP Section -->
                <div class="mt-4">
                    <?php
                    $nilai_akhir = 0;
                    $mutu = "";

                    if (isset($_POST['kirim']) && $_POST['kirim'] == "1") {
                        $nilai_akhir = $_POST['nilai']; // Penugasan nilai yang benar
                        if ($nilai_akhir >= 85) {
                            $mutu = "A";
                        } elseif ($nilai_akhir >= 75) {
                            $mutu = "B";
                        } elseif ($nilai_akhir >= 55) {
                            $mutu = "C";
                        } elseif ($nilai_akhir >= 40) {
                            $mutu = "D";
                        } else {
                            $mutu = "E";
                        }

                        echo "<div class='alert alert-primary' role='alert'>";
                        echo "<strong>Nilai Akhir:</strong> " . $nilai_akhir . "<br/>";
                        echo "<strong>Nilai Mutu:</strong> " . $mutu;
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
