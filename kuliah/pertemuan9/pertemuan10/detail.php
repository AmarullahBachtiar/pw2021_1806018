<?php
require 'function.php';
//mengambil id dair url
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail</title>
</head>

<body>
  <h2>detail mahasiswa </h2>
  <ul>
    <li><img src="img/<?= $mhs['gambar']; ?>"></li>
    <li>NPM :<?= $mhs['npm']; ?></li>
    <li>nama :<?= $mhs['nama']; ?></li>
    <li>alamat :<?= $mhs['alamat']; ?></li>
    <li>jurusan : <?= $mhs['jurusan']; ?></li>
    <li>jenis kelamin : <?= $mhs['jenis_kelamin']; ?></li>
    <li><a href="hapsu">hapus</a> | <a href="edit">edit</a></li>
    <li><a href="latihan3.php">kembali ke daftar mahasiswa</a></li>
  </ul>
</body>

</html>