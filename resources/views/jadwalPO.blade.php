<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Buat Data Bus - Admin PO</title>
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

    .container {
      background-color: white;
      margin: 40px auto;
      padding: 30px;
      width: 90%;
      max-width: 600px;
      border-radius: 20px;
      color: #333;
    }

    h2 {
      text-align: center;
      color: #f57900;
      margin-bottom: 30px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    label {
      font-weight: bold;
    }

    input, select {
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 14px;
      width: 100%;
    }

    button.submit-btn {
      background-color: #f57900;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
    }

    button.submit-btn:hover {
      background-color: #e46300;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <div class="logo">TIXpress Admin PO 🚌</div>
    <div class="nav-buttons">
      <button onclick="window.location.href='/admin-po'">Home</button>
      <button>Logout</button>
    </div>
  </div>

  <div class="container">
    <h2>Tambah Data Bus</h2>
    <form method="POST" action="/admin-po/bus/store">
      <!-- @csrf jika pakai Laravel -->

      <div>
        <label for="nomor">Nomor Plat / Bus</label>
        <input type="text" name="nomor" id="nomor" required>
      </div>

      <div>
        <label for="kapasitas">Kapasitas</label>
        <input type="number" name="kapasitas" id="kapasitas" required>
      </div>

      <div>
        <label for="id_rute">Rute</label>
        <select name="id_rute" id="id_rute" required>
          <option value="" disabled selected>Pilih Rute</option>
          <!-- Contoh rute, nanti ganti dari DB -->
          <option value="1">Jakarta - Bandung</option>
          <option value="2">Yogyakarta - Surabaya</option>
        </select>
      </div>

      <input type="hidden" name="id_admin_po" value="/* ID admin PO yang login */">

      <button type="submit" class="submit-btn">Simpan Data Bus</button>
    </form>
  </div>

</body>
</html>