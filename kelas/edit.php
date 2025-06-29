<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM kelas WHERE id_kelas=$id")->fetch_assoc();

if ($_POST) {
    $conn->query("UPDATE kelas SET nama_kelas='{$_POST['nama_kelas']}', wali_kelas='{$_POST['wali_kelas']}' WHERE id_kelas=$id");
    header("Location: index.php");
}
?>
<h3>Edit Kelas</h3>
<form method="POST">
    Nama Kelas: <input name="nama_kelas" value="<?= $data['nama_kelas'] ?>"><br>
    Wali Kelas: <input name="wali_kelas" value="<?= $data['wali_kelas'] ?>"><br>
    <button type="submit">Update</button>
</form>

