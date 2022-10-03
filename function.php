<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'prakweb_x_203040006_pw');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $judul_buku = htmlspecialchars($data['judul_buku']);
  $gambar_buku = htmlspecialchars($data['gambar_buku']);
  $penulis_buku = htmlspecialchars($data['penulis_buku']);
  $tahun_terbit = htmlspecialchars($data['tahun_terbit']);

  $query = "INSERT INTO
              buku
              VALUES
              (null, '$judul_buku', '$gambar_buku', '$penulis_buku', '$tahun_terbit')";

mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $judul_buku = htmlspecialchars($data['judul_buku']);
  $gambar_buku = htmlspecialchars($data['gambar_buku']);
  $penulis_buku = htmlspecialchars($data['penulis_buku']);
  $tahun_terbit = htmlspecialchars($data['tahun_terbit']);

  $query = "UPDATE buku SET
              judul_buku = '$judul_buku',
              gambar_buku = '$gambar_buku',
              penulis_buku = '$penulis_buku',
              tahun_terbit = '$tahun_terbit',
              gambar_buku = '$gambar_buku'
              WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}