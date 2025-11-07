<?php
include '../koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM barang_masuk WHERE id_masuk='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Barang Masuk</title>
<style>
body {
    ont-family: Arial; 
    background: #f1f5f9; 
    padding: 40px; 
}
form { 
    background: white; 
    padding: 20px; 
    border-radius: 10px; 
    width: 400px; 
    margin: auto; 
    box-shadow: 0 2px 6px rgba(0,0,0,0.1); 
}
input, textarea { 
    width: 100%; 
    padding: 8px; 
    margin: 6px 0; 
    border-radius: 6px; 
    border: 1px solid #ccc; 
}
button { 
    background: #2b6cb0; 
    color: white; 
    padding: 10px; 
    border: none; 
    border-radius: 6px; cursor: pointer; 
}
button:hover { 
    background: #2c5282; 
}

</style>
</head>
<body>

<h2 align="center">Edit Barang Masuk</h2>
<form action="proses.php" method="POST">
    <input type="hidden" name="id_masuk" value="<?= $d['id_masuk']; ?>">
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

</body>
</html>