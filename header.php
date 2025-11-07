<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>
<body>
    <style>
       :root {
      --green-dark: #2f855a;
      --green-light: #68d391;
      --cream: #f8f4e3;
      --white: #ffffff;
      --gray: #555;
    }
        /* ===== HEADER ===== */
    header {
      background-color: var(--green-dark);
      color: var(--white);
      display: block;
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
      letter-spacing: 0.5px;
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

    nav a:hover, nav a.active {
      background-color: var(--green-light);
      color: var(--green-dark);
    }

    </style>
    <header>
    <div class="logo-container">
      <div class="logo">📦</div>
      <div class="nama-gudang">Pangan Nusantara</div>
    </div>

    <nav>
      <a href="/MANAJEMENGUDANG/dashboard.php">Dashboard</a>
      <a href="/MANAJEMENGUDANG/stok.php">Stok</a>
      <a href="/MANAJEMENGUDANG/barang_masuk.php">Barang Masuk</a>
      <a href="/MANAJEMENGUDANG/barang_keluar.php">Barang Keluar</a>
      <a href="/MANAJEMENGUDANG/tabel_barang.php">Tabel Barang</a>
      <a href="logout.php" style="background: #dc2626;">Logout</a>
    </nav>
  </header>
</body>
</html>