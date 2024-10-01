<?php

$nama = @$_GET['nama']; // Mengambil nilai parameter 'nama' dari query string
$usia = @$_GET['usia']; // Mengambil nilai parameter 'usia' dari query string

// Menampilkan pesan menggunakan variabel $nama dan $usia
echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>
