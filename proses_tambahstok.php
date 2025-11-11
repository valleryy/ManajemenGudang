<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $kode_barang = mysqli_real_escape_string($koneksi, $_POST['Kode_barang']);
    $nama_barang = mysqli_real_escape_string($koneksi, $_POST['Nama_barang']);
    $satuan = mysqli_real_escape_string($koneksi, $_POST['Satuan']);
    $jumlah_stok = (int)$_POST['Jumlah_stok'];

    // Simpan data baru
    $query = "INSERT INTO stok_barang (Kode_barang, Nama_barang, Satuan, Jumlah_stok)
              VALUES ('$kode_barang', '$nama_barang', '$satuan', '$jumlah_stok')";
    
    if (mysqli_query($koneksi, $query)) {
        echo "<script>
            alert('Data stok berhasil ditambahkan!');
            window.location='stok.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal menambahkan data!');
            window.location='tambah_stok.php';
        </script>";
    }
}
?>