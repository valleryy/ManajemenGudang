<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Barang Masuk</title>
<style>
:root {
  --green-dark: #2f855a;
  --green-light: #68d391;
  --cream: #f8f4e3;
  --white: #ffffff;
  --gray: #555;
}
body {
    font-family: "Poppins", sans-serif;
    background: var(--cream);
    margin: 0;
}
header {
    background-color: var(--green-dark);
    color: var(--white);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 30px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
}
.logo-container {
    display: flex;
    align-items: center;
    gap: 10px;
}
.logo {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: var(--white);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: var(--green-dark);
}
.nama-gudang {
    font-size: 18px;
    font-weight: 600;
}
nav {
    display: flex;
    gap: 18px;
}
nav a {
    color: var(--white);
    text-decoration: none;
    font-weight: 500;
    padding: 6px 10px;
    border-radius: 6px;
    transition: 0.2s;
}
nav a:hover,
nav a.active {
    background-color: var(--green-light);
    color: var(--green-dark);
}
.container {
    background: white;
    max-width: 500px;
    margin: 100px auto;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}
.container h2 {
    text-align: center;
    color: var(--green-dark);
    margin-bottom: 20px;
}
label {
    display: block;
    margin-top: 10px;
    color: var(--gray);
}
input, textarea {
    width: 100%;
    padding: 8px;
    margin-top: 6px;
    border: 1px solid #ccc;
    border-radius: 6px;
}
button {
    margin-top: 20px;
    width: 100%;
    padding: 10px;
    background: var(--green-dark);
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 500;
}
button:hover {
    background: #276749;
}
.back-link {
    text-decoration: none;
    display: inline-block;
    margin-top: 10px;
    color: var(--green-dark);
}
</style>
</head>
<body>

<header>
  <div class="logo-container">
    <div class="logo">📦</div>
    <div class="nama-gudang">Pangan Nusantara</div>
  </div>

  <nav>
    <a href="/MANAJEMENGUDANG/dashboard.php">Dashboard</a>
    <a href="/MANAJEMENGUDANG/stok.php">Stok</a>
    <a href="/MANAJEMENGUDANG/barang_masuk.php" class="active">Barang Masuk</a>
    <a href="/MANAJEMENGUDANG/barang_keluar.php">Barang Keluar</a>
    <a href="/MANAJEMENGUDANG/tabel_barang.php">Tabel Barang</a>
    <a href="logout.php" style="background: #dc2626;">Logout</a>
  </nav>
</header>

<div class="container">
  <h2>Tambah Barang Masuk</h2>

  <form action="proses_tambahmasuk.php" method="POST">
      <label>Kode Barang</label>
      <input type="text" name="kode_barang" placeholder="Masukkan kode barang" required>

      <label>Nama Barang</label>
      <input type="text" name="nama_barang" placeholder="Masukkan nama barang" required>

      <label>Jumlah Masuk</label>
      <input type="number" name="jumlah_masuk" placeholder="Masukkan jumlah masuk" required>

      <label>Tanggal Masuk</label>
      <input type="date" name="tanggal_masuk" required>

      <label>Keterangan</label>
      <textarea name="keterangan" rows="3" placeholder="Opsional..."></textarea>

      <button type="submit" name="simpan">Simpan</button>
  </form>

  <a href="/MANAJEMENGUDANG/barang_masuk.php" class="back-link">← Kembali ke Data Barang Masuk</a>
</div>

</body>
</html>
