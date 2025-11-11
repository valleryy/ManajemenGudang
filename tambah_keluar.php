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

<div class="container">
  <h2>Tambah Barang Keluar</h2>

  <form action="proses_tambahkeluar.php" method="POST">
      <label>Kode Barang</label>
      <input type="number" name="Kode_barang" placeholder="Masukkan kode barang" required>

      <label>Nama Barang</label>
      <input type="text" name="Nama_barang" placeholder="Masukkan nama barang" required>

      <label>Jumlah Keluar</label>
      <input type="number" name="Jumlah_keluar" placeholder="Masukkan jumlah keluar" required>

      <label>Tanggal Keluar</label>
      <input type="date" name="Tanggal_keluar" required>

      <label>Keterangan</label>
      <textarea name="Keterangan" rows="3" placeholder="Opsional..."></textarea>

      <button type="submit" name="simpan">Simpan</button>
  </form>

  <a href="barang_keluar.php" class="back-link">← Kembali</a>
</div>

</body>
</html>
