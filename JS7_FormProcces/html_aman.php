<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Aman PHP</title>
</head>
<body>
    <h2>Form Input Aman PHP</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Input: </label>
        <input type="text" name="input" id="input" required><br><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" value="Kirim">
    </form>

    <?php
    // Cek apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengamankan input
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        // Menampilkan input yang sudah diamankan
        echo "<h3>Data yang Anda masukkan:</h3>";
        echo "Input: " . $input . "<br>";

        // Memeriksa apakah input adalah email yang valid
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Lanjutkan dengan pengolahan email yang aman
            echo "Email valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "<br>";
        } else {
            // Tangani input yang tidak valid
            echo "Email tidak valid.<br>";
        }
    }
    ?>
</body>
</html>
