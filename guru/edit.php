<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM guru WHERE id_guru=$id")->fetch_assoc(); // Asumsi tabel 'guru'
if ($_POST) {
    $conn->query("UPDATE guru SET nama_guru='{$_POST['nama_guru']}', nip='{$_POST['nip']}' WHERE id_guru=$id"); // Asumsi tabel 'guru'
    header("Location: index.php");
}
?>
<h3>Edit Guru</h3>
<form method="POST">
    Nama Guru: <input name="nama_guru" value="<?= $data['nama_guru'] ?>"><br>
    NIP: <input name="nip" value="<?= $data['nip'] ?>"><br>
    <button type="submit">Update</button>
</form>