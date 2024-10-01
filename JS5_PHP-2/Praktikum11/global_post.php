<!DOCTYPE html>
<html>
<body>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
// Memeriksa apakah metode permintaan adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari input field dengan name="fname"
    $name = $_POST['fname'];

    // Memeriksa apakah input name kosong
    if (empty($name)) {
        echo "Name is empty"; // Jika kosong, tampilkan pesan
    } else {
        echo $name; // Jika tidak kosong, tampilkan nilai name
    }
}
?>

</body>
</html>
