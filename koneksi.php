<?php
$koneksi = mysqli_connect("Localhost", "root", "" , "dbmahasiswa");

if (mysqli_connect_error()) {
    echo "koneksi database gagal : " . mysqli_connect_error();
} 