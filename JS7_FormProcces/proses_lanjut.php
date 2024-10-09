<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $selectedBuah = $_POST['buah'];

    // Memeriksa apakah checkbox warna diisi
    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = [];
    }

    // Mengambil pilihan jenis kelamin
    $selectedJenisKelamin = $_POST['jenis_kelamin'];

    // Menampilkan hasil
    echo "Anda memilih buah: " . $selectedBuah . "<br>";

    if (!empty($selectedWarna)) {
        echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>";
    } else {
        echo "Anda tidak memilih warna favorit.<br>";
    }

    echo "Jenis kelamin Anda: " . $selectedJenisKelamin;
}
?>
