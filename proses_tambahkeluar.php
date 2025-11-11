<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $kode_barang = $_POST['Kode_barang'];
    $nama_barang = $_POST['Nama_barang'];
    $jumlah_keluar = $_POST['Jumlah_keluar'];
    $tanggal_keluar = $_POST['Tanggal_keluar'];
    $keterangan = $_POST['Keterangan'];

    // 1. Simpan transaksi ke tabel barang_keluar
    $query_keluar = "INSERT INTO barang_keluar 
        (Kode_barang, Nama_barang, Jumlah_keluar, Tanggal_keluar, Keterangan)
        VALUES ('$kode_barang', '$nama_barang', '$jumlah_keluar', '$tanggal_keluar', '$keterangan')";
    
    $result_keluar = mysqli_query($koneksi, $query_keluar);

    if (!$result_keluar) {
        die("Gagal menyimpan data barang keluar: " . mysqli_error($koneksi));
    }

    // 2. Kurangi stok total
    $cek = mysqli_query($koneksi, "SELECT Jumlah_stok FROM stok_barang WHERE Kode_barang='$kode_barang'");
    $data = mysqli_fetch_assoc($cek);

    if ($data && $data['Jumlah_stok'] >= $jumlah_keluar) {
        $update_stok = "UPDATE stok_barang
                        SET Jumlah_stok = Jumlah_stok - $jumlah_keluar
                        WHERE Kode_barang = '$kode_barang'";
        mysqli_query($koneksi, $update_stok);
        echo "<script>alert('Barang keluar berhasil disimpan dan stok diperbarui!'); window.location='barang_keluar.php';</script>";
    } else {
        echo "<script>alert('Stok tidak mencukupi atau data barang tidak ditemukan!'); window.location='tambah_keluar.php';</script>";
    }
}
?>
