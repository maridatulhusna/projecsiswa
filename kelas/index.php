<?php include '../config/koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Kelas</title>
    <style>
        body {
            background-color: #f1f8e9; 
            font-family: Arial, sans-serif;
            padding: 40px;
        }

        h2 {
            text-align: center;
            background-color:rgb(118, 155, 92);
            color: white;
            padding: 10px;
            border-radius: 8px;
        }

        a {
            background-color: #33691e;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
            margin-left: 10px;
        }

        a:hover {
            background-color:rgb(59, 132, 63);
        }

        table {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #aed581;
        }

        td a {
            background-color: #ef6c00;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            text-decoration: none;
            margin: 2px;
        }

        td a:hover {
            background-color: #e65100;
        }
    </style>
</head>
<body>

<h2>Data Kelas</h2>
<div style="text-align: center;">
    <a href="tambah.php">+ Tambah Kelas</a>
</div>

<table>
    <tr><th>No</th><th>Nama Kelas</th><th>Wali kelas</th><th>Aksi</th></tr>
    <?php
    $no = 1;
    $data = $conn->query("SELECT * FROM kelas");
    while($d = $data->fetch_assoc()):
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $d['nama_kelas'] ?></td>
        <td><?= $d['wali_kelas'] ?></td>
        <td>
            <a href="edit.php?id=<?= $d['id_kelas'] ?>">Edit</a>
            <a href="hapus.php?id=<?= $d['id_kelas'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

</body>
</html>
