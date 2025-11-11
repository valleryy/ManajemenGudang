<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pangan Nusantara</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
    :root {
      --green-dark: #2f855a;
      --green-light: #68d391;
      --cream: #f8f4e3;
      --white: #ffffff;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: linear-gradient(to bottom right, var(--cream), #f0eedb);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      text-align: center;
      position: relative;
      overflow-x: hidden;
      padding-bottom: 80px;
    }

    /* Background dekoratif */
    .bg-shape {
      position: absolute;
      width: 400px;
      height: 400px;
      border-radius: 50%;
      background: rgba(104, 211, 145, 0.2);
      top: -100px;
      right: -100px;
      z-index: 0;
      filter: blur(50px);
    }

    .bg-shape-2 {
      position: absolute;
      width: 300px;
      height: 300px;
      border-radius: 50%;
      background: rgba(47, 133, 90, 0.2);
      bottom: 60px;
      left: -100px;
      z-index: 0;
      filter: blur(60px);
    }

    /* Konten utama */
    .container {
      position: relative;
      z-index: 1;
      background: var(--white);
      padding: 60px 80px;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      max-width: 450px;
      width: 90%;
      margin-left: 170px;

      /* Animasi masuk */
      opacity: 0;
      transform: translateY(30px);
      animation: containerFade 1s ease forwards;
    }

    @keyframes containerFade {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Logo animasi floating */
    .logo {
      background-color: var(--green-light);
      width: 80px;
      height: 80px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      font-size: 2rem;
      animation: float 3s ease-in-out infinite, logoEntrance 1s ease forwards;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    @keyframes logoEntrance {
      0% { opacity: 0; transform: translateY(-50px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .logo img {
      width: 100%;
      height:100%;
      object-fit: cover;
      border-radius: 50%;
      display:block;
    }

    h1 {
      color: #1b5e20;
      font-size: 1.8rem;
      margin-bottom: 10px;
      opacity: 0;
      animation: textFade 1s ease forwards;
      animation-delay: 0.5s;
    }

    h1 span {
      color:#ffb84c;
    }

    p {
      color: #555;
      font-size: 1rem;
      margin-bottom: 30px;
      opacity: 0;
      animation: textFade 1s ease forwards;
      animation-delay: 1s;
    }

    @keyframes textFade {
      0% { opacity: 0; transform: translateY(20px);}
      100% { opacity: 1; transform: translateY(0);}
    }

    button {
      background: linear-gradient(135deg, var(--green-dark), var(--green-light));
      color: var(--white);
      border: none;
      padding: 12px 40px;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
      display: inline-block;
      opacity: 0;
      animation: buttonFade 1s ease forwards;
      animation-delay: 1.5s;
    }

    .btn-next:hover {
      transform: scale(1.03);
      background: linear-gradient(135deg, var(--green-light), var(--green-dark));
    }

    @keyframes buttonFade {
      0% { opacity: 0; transform: translateY(20px);}
      100% { opacity: 1; transform: translateY(0);}
    }

  </style>
</head>
<body>

  <div class="bg-shape"></div>
  <div class="bg-shape-2"></div>

  <div class="container">
    <div class="logo"><img src="/MANAJEMENGUDANG/logo.jpg"></div>
    <h1><span>Nusantara</span> Pangan</h1>
    <p>Sistem Manajemen Gudang Sembako</p>
    <button onclick="window.location.href='login.php'">Berikutnya ➜</button>
  </div>

</body>
</html>
