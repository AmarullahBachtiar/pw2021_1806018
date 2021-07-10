<?php

require 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa ");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>belajar menjadi backand</title>
</head>

<body>
  <h3>Data Mahasiswa</h3>
  <table border="1">
    <tr>
      <th>No</th>
      <th>NPM</th>
      <th>Nama</th>
      <th>alamat</th>
      <th>aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $mhs['npm']; ?></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['alamat']; ?></td>
        <td><a href="ubah">ubah</a> | <a href="hapus">hapus</a></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>