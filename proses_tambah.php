<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $kode_barang   = $_POST['Kode_barang'];
    $nama_barang   = $_POST['Nama_barang'];
    $jumlah_masuk  = $_POST['Jumlah_masuk'];
    $tanggal_masuk = $_POST['Tanggal_masuk'];
    $keterangan    = $_POST['Keterangan'];

    // Validasi input
    if ($Kode_barang == "" || $nama_barang == "" || $jumlah_masuk <= 0 || $tanggal_masuk == "") {
        echo "<script>alert('Semua field wajib diisi dengan benar!'); window.location='/MANAJEMENGUDANG/tambah_barangmasuk.php';</script>";
        exit;
    }

    // Prepared statement untuk keamanan
    $stmt = $koneksi->prepare("INSERT INTO barang_masuk (Kode_barang, Nama_barang, Jumlah_masuk, Tanggal_masuk, Keterangan) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $kode_barang, $nama_barang, $jumlah_masuk, $tanggal_masuk, $keterangan);

    if ($stmt->execute()) {
        echo "<script>
                alert('Data barang berhasil ditambahkan!');
                window.location='/MANAJEMENGUDANG/barang_masuk.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menambahkan data!');
                window.location='/MANAJEMENGUDANG/tambah_barangmasuk.php';
              </script>";
    }

    $stmt->close();
} else {
    // Jika file ini diakses langsung tanpa POST
    header("Location: /MANAJEMENGUDANG/tambah_barangmasuk.php");
    exit;
}
?>
