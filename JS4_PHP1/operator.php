<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Tambah: {$hasilTambah} <br>";
echo "Kurang: {$hasilKurang} <br>";
echo "Kali: {$hasilKali} <br>";
echo "Bagi: {$hasilBagi} <br>";
echo "Sisa Bagi: {$sisaBagi} <br>";
echo "Pangkat: {$pangkat} <br><br>";


$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Sama: " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "Tidak Sama: " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "Lebih Kecil: " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "Lebih Besar: " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "Lebih Kecil atau Sama: " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "Lebih Besar atau Sama: " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br><br>";


$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "And (a && b): " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Or (a || b): " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Not A (!a): " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Not B (!b): " . ($hasilNotB ? 'true' : 'false') . "<br><br>";


$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Identik (a === b): " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "Tidak Identik (a !== b): " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";
?>
