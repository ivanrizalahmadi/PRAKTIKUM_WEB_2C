<?php
session_start();
include 'koneksi.php';

$id = $_POST['id'];
$query = "SELECT * FROM anggota WHERE id = ?";
$sql = $db1->prepare($query);
$sql->bind_param('i', $id);
$sql->execute();
$res1 = $sql->get_result();

$data = $res1->fetch_assoc();
echo json_encode($h);
$db1->close();
?>
