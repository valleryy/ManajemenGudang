<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $kode_barang = $_POST['Kode_barang'];
    $nama_barang = $_POST['Nama_barang'];
    $jumlah_masuk = $_POST['Jumlah_masuk'];
    $tanggal_masuk = $_POST['Tanggal_masuk'];
    $keterangan = $_POST['Keterangan'];

    // 1. Simpan transaksi ke tabel barang_masuk
    $query_masuk = "INSERT INTO barang_masuk (Kode_barang, Nama_barang, Jumlah_masuk, Tanggal_masuk, Keterangan)
                    VALUES ('$kode_barang','$nama_barang', '$jumlah_masuk', '$tanggal_masuk', '$keterangan')";
    if (!mysqli_query($koneksi, $query_masuk)) {
        die("Query barang_masuk gagal: " . mysqli_error($koneksi));
    }

    // 2. Update stok total (tambah)
    $cek = mysqli_query($koneksi, "SELECT * FROM stok_barang WHERE Kode_barang='$kode_barang'");
    if (mysqli_num_rows($cek) > 0) {
        $update_stok = "UPDATE stok_barang
                        SET Jumlah_stok = Jumlah_stok + $jumlah_masuk
                        WHERE Kode_barang = '$kode_barang'";
        if (!mysqli_query($koneksi, $update_stok)) {
            die("Query update stok gagal: " . mysqli_error($koneksi));
        }
    } else {
        $insert_stok = "INSERT INTO stok_barang (Kode_barang, Nama_barang, Satuan, Jumlah_stok)
                        VALUES ('$kode_barang', '$nama_barang', '-', '$jumlah_masuk')";
        if (!mysqli_query($koneksi, $insert_stok)) {
            die("Query insert stok gagal: " . mysqli_error($koneksi));
        }
    }

    echo "<script>alert('Barang masuk berhasil disimpan dan stok diperbarui!'); window.location='barang_masuk.php';</script>";
}
?>
