<?php 
require 'function.php';
$buku=query('SELECT * FROM buku');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku</title>
</head>

<body>

  <h1>Daftar Buku Novel</h1>

  <table border="1" cellpading="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>judul_buku</th>
      <th>Penulis_buku</th>
      <th>harga_buku</th>
      <th>tahun_terbit</th>
      <th>jumlah_halaman</th>
      <th>gambar_buku</th>
      <th>aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($buku as $row) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $row["judul_buku"]; ?> </td>
        <td><?= $row["penulis_buku"]; ?></td>
        <td><?= $row["harga_buku"]; ?></td>
        <td><?= $row["tahun_terbit"]; ?></td>
        <td><?= $row["jumlah_halaman"]; ?></td>
        <td><img src="<?= $row["gambar_buku"]; ?>" alt="" width="100"></td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>