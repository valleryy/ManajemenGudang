<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Gudang Pangan Nusantara</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
    :root {
      --green-dark: #2f855a;
      --green-light: #68d391;
      --cream: #f8f4e3;
      --white: #ffffff;
      --accent: #ffb84c;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: var(--cream);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* ===== HEADER ===== */
    header {
      width: 100%;
      background-color: var(--green-dark);
      color: var(--white);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 12px 28px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.15);
      position: sticky;
      top: 0;
      z-index: 10;
      animation: slideDown 0.7s ease;
    }

    .logo-container {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .logo-container img {
      width: 55px;
      height: 55px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid var(--white);
      box-shadow: 0 0 10px rgba(255,255,255,0.3);
      animation: fadeIn 1s ease;
    }

    .nama-gudang {
      font-size: 20px;
      font-weight: 600;
      color:var(--accent) ;
      letter-spacing: 0.5px;
    }

    .nama-gudang span {
      color: #fff;
    }

    /* ===== NAVIGASI ===== */
    nav {
      display: flex;
      gap: 18px;
    }

    nav a {
      color: var(--cream);
      text-decoration: none;
      font-weight: 500;
      padding: 8px 12px;
      border-radius: 6px;
      transition: 0.3s ease;
    }

    /* Hover dan aktif dengan efek neon + shadow */
    nav a:hover,
    nav a.active {
      color: var(--accent);
      text-shadow: 0 0 6px #ffcc70, 0 0 12px #ffb84c;
      transform: scale(1.05);
    }

    nav a.logout {
      background: var(--accent);
      color: var(--green-dark);
      font-weight: 600;
      border-radius: 8px;
      transition: 0.3s;
    }

    nav a.logout:hover {
      background: #ffd36b;
      color: #1e4620;
      box-shadow: 0 0 10px rgba(255, 204, 112, 0.8);
      transform: scale(1.05);
    }

    /* ===== MAIN ===== */
    main {
      flex: 1;
      padding: 50px 60px;
      animation: fadeIn 1s ease;
    }

    .card {
      background-color: var(--white);
      border-radius: 14px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      padding: 30px;
      max-width: 1000px;
      margin: 0 auto;
      text-align: center;
    }

    h1 {
      color:rgba(8, 7, 7, 0.98);
      font-size: 26px;
      margin-bottom: 10px;
      animation: fadeUp 0.8s ease;
    }

    h2 {
      color: var(--accent);
      font-size: 26px;
      margin-bottom: 10px;
      animation: fadeUp 1s ease;
    }

    h2 span {
      color:var(--green-dark);
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

    p {
      color: #555;
      line-height: 1.7;
      margin-bottom: 30px;
      animation: fadeUp 1.2s ease;
    }

    /* ===== RINGKASAN ===== */
    .summary {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
      margin-top: 30px;
    }

    .summary-card {
      background: linear-gradient(145deg, var(--green-light), #b5f3c7);
      color: var(--green-dark);
      border-radius: 12px;
      padding: 25px;
      text-align: center;
      box-shadow: 0 6px 12px rgba(0,0,0,0.15);
      transition: 0.3s ease;
      animation: popIn 1s ease;
    }

    .summary-card:hover {
      transform: translateY(-7px) scale(1.03);
      box-shadow: 0 10px 18px rgba(0,0,0,0.2);
    }

    .summary-card h3 {
      margin-bottom: 10px;
      font-size: 20px;
    }

    .summary-card span {
      font-size: 40px;
      font-weight: bold;
      display: block;
    }

    /* ===== FOOTER ===== */
    footer {
      background-color: var(--green-dark);
      color: var(--white);
      text-align: center;
      padding: 16px 0;
      font-size: 0.9rem;
      box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.15);
    }

    /* ===== ANIMASI ===== */
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes popIn {
      from { opacity: 0; transform: scale(0.8); }
      to { opacity: 1; transform: scale(1); }
    }

    @keyframes slideDown {
      from { transform: translateY(-50px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 850px) {
      header {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
      }
      nav {
        flex-wrap: wrap;
      }
      main {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo-container">
      <img src="logo.jpg" alt="Logo Gudang">
      <div class="nama-gudang">Nusantara <span>Pangan</span></div>
    </div>

    <nav>
      <a href="dashboard.php" class="active">Dashboard</a>
      <a href="stok.php">Stok</a>
      <a href="barang_masuk.php">Barang Masuk</a>
      <a href="barang_keluar.php">Barang Keluar</a>
      <a href="logout.php" class="logout">Logout</a>
    </nav>
  </header>

  <main>
    <div class="card">
      <h1>Selamat Datang di Gudang</h1>
      <h2>Nusantara <span>Pangan</span></h2>
      <p>Berikut adalah ringkasan aktivitas dan data stok barang yang tercatat dalam sistem manajemen gudang sembako:</p>

      <div class="summary">
        <div class="summary-card">
          <h3>Total Stok</h3>
          <span id="stok">0</span>
        </div>
        <div class="summary-card">
          <h3>Barang Masuk</h3>
          <span id="masuk">0</span>
        </div>
        <div class="summary-card">
          <h3>Barang Keluar</h3>
          <span id="keluar">0</span>
        </div>
      </div>
    </div>
  </main>

  <footer>
    &copy; 2025 Pangan Nusantara — Sistem Manajemen Gudang Sembako
  </footer>

  <script>
    // Animasi angka dinamis
    function animateValue(id, start, end, duration) {
      const obj = document.getElementById(id);
      let startTimestamp = null;
      const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        obj.innerText = Math.floor(progress * (end - start) + start);
        if (progress < 1) window.requestAnimationFrame(step);
      };
      window.requestAnimationFrame(step);
    }

    animateValue("stok", 0, 120, 1200);
    animateValue("masuk", 0, 58, 1000);
    animateValue("keluar", 0, 43, 1000);
  </script>
</body>
</html>