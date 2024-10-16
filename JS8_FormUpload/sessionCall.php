<?php
session_start(); // Memulai atau melanjutkan sesi PHP
?>
<!DOCTYPE html>
<html>
<body>
<?php
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>"; // Menampilkan nilai variabel sesi "favcolor"
echo "Favorite animal is " . $_SESSION["favanimal"] . "."; // Menampilkan nilai variabel sesi "favanimal"
?>
</body>
</html>
