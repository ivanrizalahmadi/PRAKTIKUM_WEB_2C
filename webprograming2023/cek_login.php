<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include "config/koneksi.php";
include "fungsi/pesan_kilat.php";
include "fungsi/anti_injection.php";

// Mengambil data username dan password dari form
$username = antiinjection($koneksi, $_POST['username']);
$password = antiinjection($koneksi, $_POST['password']);

$query = "SELECT username, level, salt, password AS hashed_password FROM user WHERE username = '$username'";
$result = mysqli_query($koneksi, $query);

// Cek jika query gagal
if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}

$row = mysqli_fetch_assoc($result);
mysqli_close($koneksi);

if ($row) {
    $salt = $row['salt'];
    $hashed_password = $row['hashed_password'];

    // Verifikasi password
    if ($hashed_password !== null) {
        // Jika salt kosong, hanya verifikasi password
        if ($salt === null || $salt === '') {
            if (password_verify($password, $hashed_password)) {
                // Set session jika login berhasil
                $_SESSION['username'] = $row['username'];
                $_SESSION['level'] = $row['level'];
                header("Location: index.php");
                exit();
            } else {
                pesan('danger', "Login gagal. Password Anda Salah.");
                header("Location: login.php");
                exit();
            }
        } else {
            // Jika salt ada, kombinasikan password dengan salt
            $combined_password = $salt . $password;
            if (password_verify($combined_password, $hashed_password)) {
                // Set session jika login berhasil
                $_SESSION['username'] = $row['username'];
                $_SESSION['level'] = $row['level'];
                header("Location: index.php");
                exit();
            } else {
                pesan('danger', "Login gagal. Password Anda Salah.");
                header("Location: login.php");
                exit();
            }
        }
    }
} else {
    pesan('warning', "Username tidak ditemukan.");
    header("Location: login.php");
    exit();
}
