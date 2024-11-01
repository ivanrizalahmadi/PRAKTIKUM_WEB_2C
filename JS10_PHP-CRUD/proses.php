<?php
include('koneksi.php');

$aksi = $_GET['aksi'];

if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $query = "DELETE FROM anggota WHERE id = $id";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>

<?php
include('koneksi.php');

$aksi = $_GET['aksi'];

if ($aksi == 'tambah') {
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, No_telp) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php"); // Mengarahkan kembali ke halaman utama setelah berhasil
        exit();
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($koneksi);
    }
}


mysqli_close($koneksi);
?>
