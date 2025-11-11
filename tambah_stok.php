<?php
include "proses_tambahstok.php";


?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Stok Barang</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    :root {
      --green-dark: #2f855a;
      --green-light: #68d391;
      --cream: #f8f4e3;
      --white: #ffffff;
      --accent: #ffb84c;
      --shadow: rgba(0, 0, 0, 0.1);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: var(--cream);
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      animation: fadeIn 0.8s ease-in;
    }
    /* ===== FORM CONTAINER ===== */
    main {
      margin-top: 120px;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 40px;
    }

    .form-container {
      background: var(--white);
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 6px 16px var(--shadow);
      width: 100%;
      max-width: 600px;
      animation: fadeUp 0.8s ease;
    }

    .form-container h2 {
      color: var(--green-dark);
      text-align: center;
      margin-bottom: 25px;
      font-size: 24px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 18px;
    }

    label {
      font-weight: 500;
      color: var(--green-dark);
    }

    input[type="text"],
    input[type="number"],
    select {
      padding: 10px 12px;
      border: 1.5px solid #d4d4d4;
      border-radius: 8px;
      font-size: 15px;
      transition: 0.3s ease;
    }

    input:focus,
    select:focus {
      outline: none;
      border-color: var(--green-light);
      box-shadow: 0 0 6px rgba(104, 211, 145, 0.5);
    }

    button {
      background: var(--green-dark);
      color: var(--white);
      font-size: 16px;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      padding: 10px;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: var(--green-light);
      color: #1a202c;
      transform: scale(1.05);
      box-shadow: 0 0 12px rgba(104, 211, 145, 0.5);
    }

    /* Tombol kembali */
    .back-btn {
      background: #e53e3e;
      color: #fff;
      padding: 8px 12px;
      border-radius: 8px;
      text-decoration: none;
      display: inline-block;
      margin-top: 15px;
      text-align: center;
      transition: 0.3s;
    }

    .back-btn:hover {
      background: #c53030;
      transform: scale(1.05);
    }

    /* ===== ANIMASI ===== */
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes slideDown {
      from { transform: translateY(-60px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
      main {
        padding: 20px;
      }
      .form-container {
        padding: 25px;
      }
    }
  </style>
</head>
<body>
<main>
  <div class="form-container">
    <h2>Tambah Data Stok Barang</h2>
    <form method="POST" action="">
      <label>Kode Barang:</label>
      <input type="text" name="Kode_barang" required>

      <label>Nama Barang:</label>
      <input type="text" name="Nama_barang" required>

      <label>Satuan:</label>
      <input type="text" name="Satuan" required>

      <label>Jumlah Stok:</label>
      <input type="number" name="Jumlah_stok" required>

      <button type="submit" name="simpan">Simpan</button>
      <a href="stok.php" class="back-btn">Kembali</a>
    </form>
  </div>
</main>

</body>
</html>