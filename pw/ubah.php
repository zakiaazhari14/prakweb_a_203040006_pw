<?php
session_start();

require 'function.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query buku berdasarkan id
$m = query("SELECT * FROM buku WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubahkan!');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal diubahkan!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Buku</title>
</head>

<body>
  <h3>From Ubah Data Buku</h3>
  <form action="" method="POST">
    <input type="hidden" name="IDBuku" value="<?= $m['id']; ?>">
    <ul>
        <label>
          Harga Buku:
          <input type="text" name="harga_buku" required value="<?= $m['harga_buku']; ?>">
        </label>
      </li>
      <li>
        <label>
          Tahun Terbit
          <input type="text" name="tahun_terbit" required value="<?= $m['tahun_terbit']; ?>">
        </label>
      </li>
      <li>
        <label>
          Jumlah Halaman
          <input type="text" name="jumlah_halaman" required value="<?= $m['jumlah_halaman']; ?>">
        </label>
      </li>
      <li>
        <label>
          Gambar
          <input type="text" name="gambar_buku" required value="<?= $m['gambar_buku']; ?>">
        </label>
      </li>
      
      <li>
        <button type="submit" name="ubah.php">Ubah Data!</button>
      </li>
      </li>


    </ul>


  </form>

</body>

</html>