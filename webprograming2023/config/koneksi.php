<?php
date_default_timezone_set("Asia/Jakarta"); // Mengatur zona waktu
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb1"); // Menghubungkan ke database

if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
