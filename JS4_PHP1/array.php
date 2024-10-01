<?php

$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78]
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75]
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85]
    ]
];


$mataKuliah = 'Fisika';

echo "<br>Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";


foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
?>

<?php
$daftarNilaiSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

$siswaDiAtasRerata = [];

$totalNilai = 0;
foreach ($daftarNilaiSiswa as $nilai) {
    $totalNilai += $nilai[1];
}

$nilaiRerata = $totalNilai / count($daftarNilaiSiswa);

foreach ($daftarNilaiSiswa as $siswa) {
    if ($siswa[1] > $nilaiRerata) {
        $siswaDiAtasRerata[] = $siswa[0];
    }
}

echo "Siswa yang mendapatkan nilai lebih dari " . number_format($nilaiRerata, 2) . " adalah: <br>" . implode(", ", $siswaDiAtasRerata);

?>


