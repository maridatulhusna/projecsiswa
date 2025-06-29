<?php
include '../config/koneksi.php';
$conn->query("DELETE FROM siswa WHERE id_siswa={$_GET['id']}");
header("Location: index.php");

