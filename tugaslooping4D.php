<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deteksi Bilangan Ganjil, Genap, dan Prima</title>
</head>
<body>

    <?php
    // Fungsi untuk mengecek apakah bilangan prima
    function cekPrima($n) {
        if ($n < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // Looping dari angka 1 sampai 19
    for ($i = 1; $i <= 19; $i++) {
        if ($i % 2 == 0) {
            // Jika angka genap
            echo "Angka $i adalah bilangan genap";
        } else {
            // Jika angka ganjil
            echo "Angka $i adalah bilangan ganjil";
        }

        // Tambahkan keterangan jika bilangan prima
        if (cekPrima($i)) {
            echo " dan bilangan prima";
        }

        echo "<br>";
    }
    ?>

</body>
</html>