<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Kode_barang = mysqli_real_escape_string($koneksi, $_POST['Kode_barang']);
    $Nama_barang = mysqli_real_escape_string($koneksi, $_POST['Nama_barang']);
    $Satuan = mysqli_real_escape_string($koneksi, $_POST['Satuan']);
    $Jumlah_stok = intval($_POST['Jumlah_stok']);

    $query = "INSERT INTO stok_barang (Kode_barang, Nama_barang, Satuan, Jumlah_stok) VALUES ('$Kode_barang', '$Nama_barang', '$Satuan', $Jumlah_stok)";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header('Location: stok.php');  // redirect kembali ke halaman stok
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "Invalid request method.";
}
?>
