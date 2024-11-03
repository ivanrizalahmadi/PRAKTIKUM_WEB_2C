<?php
session_start();

// Membuat token keamanan AJAX (CSRF token)
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
