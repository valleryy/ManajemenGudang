<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Barang - Pangan Nusantara</title>
  <style>
    :root {
      --green-dark: #2f855a;
      --green-light: #68d391;
      --cream: #f8f4e3;
      --white: #ffffff;
      --gray: #555;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: var(--cream);
    }

    /* ===== HEADER ===== */
    header {
      background-color: var(--green-dark);
      color: var(--white);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 12px 24px;
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

    /* ===== NAVIGATION ===== */
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

    /* ===== MAIN CONTENT ===== */
    main {
      padding: 30px 40px;
    }

    .card {
      background-color: var(--white);
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
      padding: 24px;
      max-width: 1100px;
      margin: 0 auto;
    }

    h2 {
      color: var(--green-dark);
      margin-bottom: 16px;
      text-align: center;
    }

    /* ===== TABLE ===== */
    .table-wrap {
      overflow-x: auto;
      border-radius: 8px;
      border: 1px solid #e8e8e8;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      min-width: 800px;
    }

    thead {
      background: linear-gradient(180deg, var(--cream), var(--white));
    }

    th, td {
      padding: 12px 16px;
      text-align: left;
      border-bottom: 1px solid #f0f0f0;
    }

    th {
      color: var(--green-dark);
      font-size: 14px;
      font-weight: 600;
      position: sticky;
      top: 0;
    }

    td {
      font-size: 14px;
      color: var(--gray);
    }

    tbody tr:hover {
      background-color: rgba(104, 211, 145, 0.1);
    }

    .masuk {
      color: #16a34a;
      font-weight: 600;
    }

    .keluar {
      color: #dc2626;
      font-weight: 600;
    }

    footer {
    background-color: var(--green-dark); /* hijau tua sesuai header */
    color: var(--white);
    text-align: center;
    padding: 16px 0;
    font-size: 0.9rem;
    position: fixed;      /* menempel di bawah */
    bottom: 0;
    left: 0;
    width: 100%;
    box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.15); /* efek bayangan dari atas */
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
      <a href="/MANAJEMENGUDANG/dashboard.php" >Dashboard</a>
      <a href="/MANAJEMENGUDANNG/stok.php" >Stok</a>
      <a href="/MANAJEMENGUDANG/barang_masuk.php" >Barang Masuk</a>
      <a href="/MANAJEMENGUDANNG/barang_keluar.php">Barang Keluar</a>
      <a href="/MANAJEMENGUDANNG/tabel_barang.php" >Tabel Barang</a>
      <a href="logout.php" style="background:#dc2626;">Logout</a>
    </nav>
  </header>

  <main>
    <div class="card">
      <h2>📋 Riwayat Transaksi Barang</h2>

      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th>Kode Barang</th>
              <th>Nama Barang</th>
              <th>Jenis Transaksi</th>
              <th>Jumlah</th>
              <th>Satuan</th>
              <th>Tanggal Transaksi</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>BRG001</td>
              <td>Beras IR 5kg</td>
              <td class="masuk">Masuk</td>
              <td>40</td>
              <td>Karung</td>
              <td>2025-10-29</td>
              <td>Barang dari Supplier A</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>

  <footer>
    &copy; 2025 Pangan Nusantara — Sistem Manajemen Gudang Sembako
  </footer>

</body>
</html>