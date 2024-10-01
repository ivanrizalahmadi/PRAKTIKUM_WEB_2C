<?php
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// Panggil fungsi perkenalan dua kali
perkenalan("Ivan", "Hallo");
echo "<hr>"; // Menambahkan baris kosong agar ada jarak di antara output

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);

?>
