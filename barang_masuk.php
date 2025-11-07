<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data Barang Masuk</title>
<style>  
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

:root {
  --green-dark: #2f855a;
  --green-light: #68d391;
  --cream: #f8f4e3;
  --white: #ffffff;
  --gray: #555;
  --accent: #ffb84c;
}

/* ===== RESET ===== */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: "Poppins", sans-serif;
}

/* ===== BODY ===== */
body {
  background: var(--cream);
  animation: fadeIn 0.8s ease-in;
}

/* ===== HEADER ===== */
header {
  background-color: var(--green-dark);
  color: var(--white);
  display: flex;
  align-items: center;
  z-index: 1000;
  position: fixed;
  top:0;
  left:0;
  width:100%;
  justify-content: space-between;
  padding: 10px 30px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.15);
  animation: slideDown 0.8s ease;
}

/* ===== LOGO ===== */
.logo-container {
  display: flex;
  align-items: center;
  gap: 10px;
}

.logo-container img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  object-fit: cover;
  border: 2px solid var(--white);
  animation: fadeIn 1s ease;
}

.nama-gudang {
  color:var(--accent);
  font-size: 18px;
  font-weight: 600;
}
.nama-gudang span {
  color:#fff;
  font-size: 18px;
  font-weight: 600;
}

/* ===== NAVIGATION ===== */
nav {
  display: flex;
  gap: 18px;
}

nav a {
  color: var(--cream);
  text-decoration: none;
  font-weight: 500;
  padding: 8px 12px;
  border-radius: 8px;
  transition: 0.3s ease;
  background: none;
}

/* Hover dan aktif dengan efek neon + shadow */
nav a:hover,
nav a.active {
  color: #ffb84c;
  text-shadow: 0 0 8px #ebd69182, 0 0 16px #f7db7e94;
  transform: scale(1.05);
  background: none;
}

/* ===== MAIN CONTENT ===== */
body {
  font-family: Arial, sans-serif;
  background: #f1f5f9;
  margin: 40px;
}

h2 {
  color: #2f855a;
  margin-top: 80px;
  margin-bottom:40px;
  animation: fadeUp 1s ease;
}

a {
  text-decoration: none;
  background: #2f855a;
  color: white;
  padding: 8px 12px;
  border-radius: 6px;
  transition: 0.3s;
}

a:hover {
  background: #276749;
  box-shadow: 0 0 8px #68d391;
}

/* ===== TABLE ===== */
table {
  border-collapse: collapse;
  width: 100%;
  background: white;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  margin-top:40px;
  animation: fadeUp 1s ease;
}

th, td {
  padding: 10px;
  border: 1px solid #ddd;
  text-align: center;
}

th {
  background: #68d391;
  color: white;
}

/* ===== BUTTONS ===== */
button, .btn-edit, .btn-hapus {
  border: none;
  padding: 6px 10px;
  border-radius: 5px;
  cursor: pointer;
  color: white;
  transition: 0.3s ease;
}

.btn-edit {
  background: #f6ad55;
}

.btn-edit:hover {
  background: #ed8936;
  transform: scale(1.05);
}

.btn-hapus {
  background: #e53e3e;
}

.btn-hapus:hover {
  background: #c53030;
  transform: scale(1.05);
}

/* ===== ANIMATIONS ===== */
@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

@keyframes slideDown {
  from { transform: translateY(-100%); opacity: 0; }
  to { transform: translateY(0); opacity: 1; }
}

@keyframes fadeUp {
  from { transform: translateY(20px); opacity: 0; }
  to { transform: translateY(0); opacity: 1; }
}
</style>
</head>
<body>
<header>
  <div class="logo-container">
    <div class="logo"><img src="logo.jpg" alt="logo gudang"></div>
    <div class="nama-gudang">Nusantara <span>Pangan</span></div>
  </div>

  <nav>
    <a href="/MANAJEMENGUDANG/dashboard.php">Dashboard</a>
    <a href="/MANAJEMENGUDANG/stok.php">Stok</a>
    <a href="/MANAJEMENGUDANG/barang_masuk.php" class="active">Barang Masuk</a>
    <a href="/MANAJEMENGUDANG/barang_keluar.php">Barang Keluar</a>
    <a href="logout.php" style="background: #edd016ff;">Logout</a>
  </nav>
</header>

<h2>📥 Data Barang Masuk</h2>
<a href="tambah_barangmasuk.php">+ Tambah Barang</a>
<br><br>

<table>
<tr>
  <th>No</th>
  <th>ID Masuk</th>
  <th>Kode Barang</th>
  <th>Nama Barang</th>
  <th>Jumlah</th>
  <th>Tanggal Masuk</th>
  <th>Keterangan</th>
  <th>Aksi</th>
</tr>

<?php
$no = 1;
$query = "SELECT * FROM barang_masuk ORDER BY id_masuk DESC";
$data = mysqli_query($koneksi, $query);

if (!$data) {
  die("Query error: " . mysqli_error($koneksi));
}

while ($d = mysqli_fetch_array($data)) {
?>
<tr>
  <td><?= $no++; ?></td>
  <td><?= $d['id_masuk']; ?></td>
  <td><?= $d['Kode_barang']; ?></td>
  <td><?= $d['Nama_barang']; ?></td>
  <td><?= $d['Jumlah_masuk']; ?></td>
  <td><?= $d['Tanggal_masuk']; ?></td>
  <td><?= $d['Keterangan']; ?></td>
  <td>
    <a class="btn-edit" href="edit.php?id=<?= $d['id_masuk']; ?>">Edit</a>
    <a class="btn-hapus" href="hapus.php?id=<?= $d['id_masuk']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
  </td>
</tr>
<?php } ?>
</table>

</body>
</html>