<?php
include '../config/koneksi.php';
if ($_POST) {
    $conn->query("INSERT INTO kelas (nama_kelas, wali_kelas) VALUES ('{$_POST['nama_kelas']}', '{$_POST['wali_kelas']}')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kelas</title>
    <style>
        body {
            background-color: whitesmoke; 
            font-family: Arial, sans-serif;
            padding: 40px;
        }

        h3 {
            text-align: center;
            background-color: #558b2f;
            color: white;
            padding: 10px;
            border-radius: 8px;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            width: 300px;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            background-color: #558b2f;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 6px;
            width: 100%;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: white;
        }
    </style>
</head>
<body>

<h3>Tambah Kelas</h3>

<form method="POST">
    Nama Kelas:<br>
    <input name="nama_kelas" required><br>
    Wali Kelas:<br>
    <input name="wali_kelas" required><br>
    <button type="submit">Simpan</button>
</form>

</body>
</html>
