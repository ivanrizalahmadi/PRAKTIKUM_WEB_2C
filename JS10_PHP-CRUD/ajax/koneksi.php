<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB1', 'prakwebdb');

// Buat koneksi ke database
$db1 = new mysqli(HOST, USER, PASS, DB1);

// Cek koneksi
if ($db1->connect_error) {
    die("Koneksi gagal: " . $db1->connect_error);
} else {
    echo "Koneksi berhasil";
}

?>
