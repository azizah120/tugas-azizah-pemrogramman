<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c</title>
    <style>
        .ganjil {
            background-color: #003;
            color: #fff;
        }

        .genap {
            background-color: #999;
            color: #000;
        }

        table {
            border-collapse: collapse;
        }

        td {
            width: 30px;
            height: 30px;
            text-align: center;
            border: 1px solid #000;
        }
    </style>
</head>
<body>

    <table>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $i; $j++) {
                // Cek apakah baris ganjil atau genap
                if ($i % 2 == 1) {
                    echo "<td class='ganjil'>$j</td>";
                } else {
                    echo "<td class='genap'>$j</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>