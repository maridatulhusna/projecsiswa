<?php
include '../config/koneksi.php';
$conn->query("DELETE FROM guru WHERE id_guru={$_GET['id']}"); // Asumsi tabel 'guru'
header("Location: index.php");
?>