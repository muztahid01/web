<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Faktorial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f3f4f6;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .result {
            font-size: 18px;
            color: #333;
        }
        .error {
            font-size: 18px;
            color: red;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #4CAF50;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h3>Hasil Faktorial</h3>

        <?php
            // Ambil nilai dari form
            $number = isset($_POST['number']) ? $_POST['number'] : 0;

            // Validasi input
            if (is_numeric($number) && $number >= 0) {
                // Hitung faktorial menggunakan loop
                $factorial = 1;
                for ($i = 1; $i <= $number; $i++) {
                    $factorial *= $i;
                }

                // Output hasil
                echo "<div class='result'>Faktorial dari $number adalah: $factorial</div>";
            } else {
                echo "<div class='error'>Harap masukkan angka yang valid.</div>";
            }
        ?>

        <a href="index.html">Hitung angka lain</a>
    </div>

</body>
</html>