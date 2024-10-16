<?php
session_start(); // Memulai sesi PHP
?>
<!DOCTYPE html>
<html>
<body>
<?php
$_SESSION["favcolor"] = "green"; // Menetapkan variabel sesi "favcolor"
$_SESSION["favanimal"] = "cat";  // Menetapkan variabel sesi "favanimal"
echo "Session variables are set."; // Menampilkan pesan bahwa variabel sesi telah ditetapkan
?>
</body>
</html>
