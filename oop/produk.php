<?php
/*
- jualan produk
- komik
- game
*/

class Produk
{
  public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = "0";

  public function getLabel()
  {
    return "$this->judul,$this->penulis,$this->penerbit,$this->harga";
  }
}
/*
$produk1 = new Produk();
$produk1->judul = "Naruto";
var_dump($produk1);
$produk2 = new Produk();
$produk2->judul = "One Piece";
$produk2->volume = "1";
var_dump($produk2);
*/
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shounen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();