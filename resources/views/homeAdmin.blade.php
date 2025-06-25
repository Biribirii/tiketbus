<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin - Home</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #f57900, #ffc107);
      color: white;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      padding: 15px 30px;
      background: rgba(0, 0, 0, 0.1);
    }

    .logo {
      font-size: 28px;
      font-weight: bold;
    }

    .nav-buttons button {
      margin-left: 15px;
      padding: 8px 16px;
      background-color: white;
      color: #f57900;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
    }

    .admin-menu {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 60px;
    }

    .admin-menu h2 {
      color: white;
      margin-bottom: 30px;
    }

    .menu-cards {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    .menu-card {
      background-color: white;
      color: #333;
      width: 250px;
      height: 150px;
      border-radius: 20px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      font-size: 18px;
      font-weight: bold;
      text-align: center;
      cursor: pointer;
      transition: transform 0.2s;
      text-decoration: none;
    }

    .menu-card:hover {
      transform: scale(1.05);
      background-color: #fff7e6;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <div class="logo">TIXpress Admin 🛠</div>
    <div class="nav-buttons">
      <button>Logout</button>
    </div>
  </div>

  <div class="admin-menu">
    <h2>Selamat Datang, Admin!</h2>
    <div class="menu-cards">
      <a href="verifikasi-pembayaran" class="menu-card">
        ✅ Verifikasi Pembayaran
      </a>
      <a href="/verifikasi-batal" class="menu-card">
        ❌ Pembatalan Pesanan
      </a>
      <a href="/verifikasi-reschedule" class="menu-card">
        🔁 Reschedule (Perubahan)
      </a>
    </div>
  </div>

</body>
</html>