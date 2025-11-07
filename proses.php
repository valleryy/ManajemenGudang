<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM barang_masuk ORDER BY id_masuk DESC");

$data = mysqli_query($koneksi, "SELECT * FROM barang_keluar ORDER BY id_keluar DESC");

$data = mysqli_query($koneksi, "SELECT * FROM pengguna ORDER BY Id_user DESC");

$data = mysqli_query($koneksi, "SELECT * FROM stok_barang ORDER BY id_stok DESC");


?>