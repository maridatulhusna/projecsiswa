<?php
include '../config/koneksi.php';
$conn->query("DELETE FROM kelas WHERE id_kelas={$_GET['id']}");
header("Location: index.php");

