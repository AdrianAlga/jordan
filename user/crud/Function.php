<?php
require "koneksi.php";
function read() {
      $conn = koneksi();
      $sql = 'SELECT * FROM `product`';
      $hasil = $conn ->query($sql);
      return $hasil;
}
function Create($nama, $jumlah, $harga) {
      $conn = koneksi();
      $sql = "INSERT INTO `product`( `nama`, `jumlah`, `harga`) VALUES ('$nama','$jumlah','$harga')";
      $hasil = $conn ->query($sql);
      return $hasil;
}
?>