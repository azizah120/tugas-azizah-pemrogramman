<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel dengan Looping PHP</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>Kolom 1</th>
        <th>Kolom 2</th>
        <th>Kolom 3</th>
        <th>Kolom 4</th>
        <th>Kolom 5</th>
    </tr>
    
    <?php
    // Looping untuk baris
    for ($baris = 1; $baris <= 15; $baris++) {
        echo "<tr>";
        
        // Looping untuk kolom
        for ($kolom = 1; $kolom <= 5; $kolom++) {
            echo "<td>Baris $baris Kolom $kolom</td>";
        }
        
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>