<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM siswa WHERE id_siswa=$id")->fetch_assoc();
$kelas = $conn->query("SELECT * FROM kelas");

if ($_POST) {
    $conn->query("UPDATE siswa SET nama_siswa='{$_POST['nama_siswa']}', nis='{$_POST['nis']}', id_kelas={$_POST['id_kelas']} WHERE id_siswa=$id");
    header("Location: index.php");
}
?>
<h3>Edit Siswa</h3>
<form method="POST">
    Nama: <input name="nama_siswa" value="<?= $data['nama_siswa'] ?>"><br>
    NIS: <input name="nis" value="<?= $data['nis'] ?>"><br>
    Kelas:
    <select name="id_kelas">
        <?php while($k = $kelas->fetch_assoc()): ?>
            <option value="<?= $k['id_kelas'] ?>" <?= $k['id_kelas']==$data['id_kelas']?'selected':'' ?>><?= $k['nama_kelas'] ?></option>
        <?php endwhile; ?>
    </select><br>
    <button type="submit">Update</button>
</form>

