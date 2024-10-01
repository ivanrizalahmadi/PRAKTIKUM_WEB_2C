<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];


sort($nilaiSiswa);
array_splice($nilaiSiswa, 0, 2);
array_splice($nilaiSiswa, -2);  

$totalNilai = array_sum($nilaiSiswa);
$jumlahNilai = count($nilaiSiswa);
$ratataNilai = $jumlahNilai > 0 ? $totalNilai / $jumlahNilai : 0;

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $totalNilai <br>";
echo "Rata-rata nilai adalah: " . number_format($ratataNilai, 2) . "<br>";
?>

<?php
$hargaProduk = 120000;
$totalHarga = $hargaProduk * 2;
$hargaSetelahDiskon = 0;

if($totalHarga > 100000) {
    echo "Anda mendapat diskon sebesar 20%";
    $hargaSetelahDiskon = $totalHarga - (($totalHarga * 20) / 100);
    echo " <br> Total belanjaan adalah: Rp. {$hargaSetelahDiskon}";
}
echo "<br><br>";
?>


<?php
$totalSkor = 520;

echo "Total skor pemain adalah : $totalSkor";
echo "<br>Apakah pemain mendapatkan hadiah tambahan?";

if($totalSkor > 500) {
    echo " YA";
} else {
    echo " TIDAK";
}
echo "<br><br>";



?>



