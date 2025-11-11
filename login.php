<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nusantara Pangan Login</title>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
    :root {
      --green-dark: #2f855a;
      --green-light: #68d391;
      --cream: #f8f4e3;
      --white: #ffffff;
      --error-bg: #ffe6e6;
      --error-text: #d63031;
      --gudang:#1b5e20;
      --gudang-dua:#ffb84c;
      --bg-solid: #f8f8f8;
    }

    * {
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: var(--bg-solid);
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      position: relative;
    }

    /* Background modern */
    .bg-shape {
      position: absolute;
      border-radius: 50%;
      filter: blur(100px);
      z-index: 0;
      opacity: 0.3;
    }

    .shape1 {
      width: 400px;
      height: 400px;
      background-color: var(--green-light);
      top: -100px;
      right: -100px;
    }

    .shape2 {
      width: 300px;
      height: 300px;
      background-color: var(--green-dark);
      bottom: -100px;
      left: -80px;
    }

    .pattern {
      position: absolute;
      width: 200%;
      height: 200%;
      top: -50%;
      left: -50%;
      background-image: radial-gradient(circle, rgba(0,0,0,0.02) 1px, transparent 1px);
      background-size: 50px 50px;
      z-index: 0;
    }

    /* Animasi Halus */
    @keyframes fadeSlide {
      from { opacity: 0; transform: translateY(-40px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .login-container {
      position: relative;
      z-index: 1;
      background: var(--white);
      padding: 60px 40px;
      border-radius: 25px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      width: 360px;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      animation: fadeSlide 1s ease-out;
    }

    /* LOGO FOTO */
    .logo {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      overflow: hidden;
      margin-bottom: 15px;
      animation: float 3s ease-in-out infinite;
    }

    .logo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    h1 {
      margin-bottom: 10px;
      color: var(--gudang-dua);
      font-weight: 700;
      font-size: 22px;
    }
    h1 span {
      margin-bottom: 10px;
      color: var(--gudang);
      font-weight: 700;
      font-size: 22px;
    }

    .error-box {
      background-color: var(--error-bg);
      color: var(--error-text);
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 8px;
      font-size: 14px;
      border: 1px solid #ff7675;
      animation: fadeSlide 0.5s ease-out;
      width: 100%;
    }

    .input-group {
      width: 100%;
      text-align: left;
      margin-bottom: 18px;
    }

    .input-group label {
      font-size: 14px;
      color: #444;
      font-weight: 500;
    }

    .input-group input {
      width: 100%;
      padding: 12px;
      border-radius: 10px;
      border: 1px solid #ccc;
      margin-top: 6px;
      transition: 0.3s;
      font-size: 14px;
    }

    .input-group input:focus {
      border-color: var(--green-light);
      box-shadow: 0 0 6px rgba(104, 211, 145, 0.3);
      outline: none;
    }

    .btn-login {
      width: 100%;
      padding: 12px;
      background: linear-gradient(135deg, var(--green-dark), var(--green-light));
      border: none;
      border-radius: 10px;
      color: var(--white);
      font-weight: 600;
      cursor: pointer;
      font-size: 15px;
      margin-top: 10px;
      transition: 0.3s;
    }

    .btn-login:hover {
      transform: scale(1.03);
      background: linear-gradient(135deg, var(--green-light), var(--green-dark));
    }

    /* Bayangan lembut di bawah */
    .login-container::after {
      content: "";
      position: absolute;
      width: 280px;
      height: 40px;
      background: radial-gradient(rgba(0,0,0,0.15), transparent);
      bottom: 110px;
      filter: blur(10px);
      z-index: -1;
    }

  </style>
</head>
<body>

  <!-- Background modern -->
  <div class="bg-shape shape1"></div>
  <div class="bg-shape shape2"></div>
  <div class="pattern"></div>

  <div class="login-container">
    <div class="logo">
      <img src="logo.jpg" alt="Logo Nusantara Pangan">
    </div>

    <h1>Nusantara <span>Pangan</span></h1>
    
    <?php
    if (isset($_GET['error'])) {
      echo '<div class="error-box">Username atau Password Salah!</div>';
    }
    ?>

    <form action="proses_login.php" method="POST">
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Masukkan username" required>
      </div>

      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Masukkan password" required>
      </div>

      <button type="submit" class="btn-login">Masuk</button>
    </form>
  </div>

</body>
</html>
