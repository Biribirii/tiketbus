<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pembatalan Tiket - Admin</title>
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
      max-width: 900px;
      border-radius: 20px;
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 12px;
      text-align: center;
      border-bottom: 1px solid #ccc;
    }

    th {
      background-color: #f57900;
      color: white;
    }

    button.confirm-btn {
      background-color: #d9534f;
      color: white;
      padding: 8px 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
    }

    button.confirm-btn:hover {
      background-color: #c9302c;
    }

    h2 {
      text-align: center;
      color: #f57900;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <div class="logo">TIXpress Admin 🛠</div>
    <div class="nav-buttons">
      <button onclick="window.location.href='/admin'">Home</button>
      <button>Logout</button>
    </div>
  </div>

  <div class="container">
    <h2>Konfirmasi Pembatalan Tiket</h2>
    <table>
      <thead>
        <tr>
          <th>ID Order</th>
          <th>Nama Penumpang</th>
          <th>Rute</th>
          <th>Tanggal</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <!-- Contoh data statis -->
        <tr>
          <td>ORD12345</td>
          <td>Bobby Santosa</td>
          <td>Jakarta - Yogyakarta</td>
          <td>2025-06-02</td>
          <td>Menunggu</td>
          <td>
            <button class="confirm-btn" onclick="confirmCancel('ORD12345')">Konfirmasi</button>
          </td>
        </tr>
        <tr>
          <td>ORD12346</td>
          <td>Rina Aulia</td>
          <td>Bandung - Semarang</td>
          <td>2025-06-04</td>
          <td>Menunggu</td>
          <td>
            <button class="confirm-btn" onclick="confirmCancel('ORD12346')">Konfirmasi</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <script>
    function confirmCancel(orderId) {
      if (confirm("Apakah Anda yakin ingin membatalkan order " + orderId + "?")) {
        // Simulasi proses pembatalan
        alert("Order " + orderId + " berhasil dibatalkan.");
        // Di Laravel, ini bisa diarahkan ke route seperti:
        // window.location.href = /admin/pembatalan/konfirmasi/${orderId};
      }
    }
  </script>

</body>
</html>