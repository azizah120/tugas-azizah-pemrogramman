<?php
include 'koneksi.php';

// Ambil Data Barang
$result = mysqli_query($conn, "SELECT * FROM barang");
?>

<!DOCTYPE html>
<html>
<head>
    <title>User - Lihat Barang</title>
</head>
<body>
    <h1>Daftar Barang</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Stok</th>
            <th>Harga</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama_barang'] ?></td>
                <td><?= $row['deskripsi'] ?></td>
                <td><?= $row['stok'] ?></td>
                <td><?= $row['harga'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
