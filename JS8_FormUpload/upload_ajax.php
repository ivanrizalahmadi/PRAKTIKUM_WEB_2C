<?php
$allowedExtensions = array("jpg", "jpeg", "png", "gif");
$maxSize = 2 * 1024 * 1024; // 2 MB
$targetDirectory = "images/";

// Membuat direktori jika belum ada
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Mengecek apakah ada file yang diunggah
if (isset($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);
    $errors = array();

    // Loop untuk setiap file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileTmp = $_FILES['files']['tmp_name'][$i];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        
        // Validasi tipe file dan ukuran
        if (!in_array($fileExt, $allowedExtensions)) {
            $errors[] = "$fileName - Ekstensi tidak diperbolehkan.";
        } elseif ($fileSize > $maxSize) {
            $errors[] = "$fileName - Ukuran file lebih dari 2 MB.";
        } else {
            $targetFile = $targetDirectory . basename($fileName);
            if (move_uploaded_file($fileTmp, $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
            } else {
                $errors[] = "$fileName - Gagal diunggah.";
            }
        }
    }

    // Menampilkan kesalahan jika ada
    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
