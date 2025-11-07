<?php
include 'koneksi.php';

// Ambil ID barang dari URL
$id = $_GET['id'];

// Ambil data lama dari database
$data = mysqli_query($koneksi, "SELECT * FROM barang_masuk WHERE id='$id'");
$d = mysqli_fetch_assoc($data);

// Kalau tombol update diklik
if (isset($_POST['update'])) {
    $kode_barang   = $_POST['kode_barang'];
    $nama_barang   = $_POST['nama_barang'];
    $jumlah_masuk  = $_POST['jumlah_masuk'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $keterangan    = $_POST['keterangan'];

    // Query update
    $query = "UPDATE barang_masuk SET 
                kode_barang='$kode_barang',
                nama_barang='$nama_barang',
                jumlah_masuk='$jumlah_masuk',
                tanggal_masuk='$tanggal_masuk',
                keterangan='$keterangan'
              WHERE id='$id'";

    $hasil = mysqli_query($koneksi, $query);

    if ($hasil) {
        echo "<script>
                alert('Data berhasil diperbarui!');
                window.location='barang_masuk.php';
              </script>";
    } else {
        echo "<script>alert('Gagal memperbarui data!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Barang Masuk</title>
<style>
body {
    font-family: Arial, sans-serif;
    background: #f1f5f9;
    padding: 40px;
}
.container {
    width: 400px;
    background: white;
    padding: 25px;
    border-radius: 10px;
    margin: auto;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}
h2 {
    text-align: center;
    color: #2f855a;
}
input, textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
}
button {
    background: #2f855a;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    width: 100%;
}
button:hover {
    background: #276749;
}
</style>
</head>
<body>
<div class="container">
<h2>Edit Barang Masuk</h2>

<form method="POST">
    <label>Kode Barang</label>
    <input type="text" name="kode_barang" value="<?= $d['kode_barang']; ?>" required>

    <label>Nama Barang</label>
    <input type="text" name="nama_barang" value="<?= $d['nama_barang']; ?>" required>

    <label>Jumlah Masuk</label>
    <input type="number" name="jumlah_masuk" value="<?= $d['jumlah_masuk']; ?>" required>

    <label>Tanggal Masuk</label>
    <input type="date" name="tanggal_masuk" value="<?= $d['tanggal_masuk']; ?>" required>

    <label>Keterangan</label>
    <textarea name="keterangan"><?= $d['keterangan']; ?></textarea>

    <button type="submit" name="update">Update</button>
</form>
</div>
</body>
</html>