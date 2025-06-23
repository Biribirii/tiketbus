<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin - Verifikasi Pembayaran</title>
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

    .verifikasi-box {
      background-color: #fff3;
      margin: 40px auto;
      padding: 30px;
      width: 95%;
      max-width: 1000px;
      border-radius: 20px;
      overflow-x: auto;
    }

    .verifikasi-box table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      color: #333;
      border-radius: 12px;
      overflow: hidden;
    }

    table thead {
      background-color: #f57900;
      color: white;
    }

    table th, table td {
      padding: 12px 16px;
      text-align: left;
      border-bottom: 1px solid #eee;
    }

    table tr:hover {
      background-color: #ffecd2;
    }

    .action-buttons form {
      display: inline-block;
    }

    .btn-approve {
      background-color: #28a745;
      color: white;
      border: none;
      padding: 6px 12px;
      border-radius: 6px;
      cursor: pointer;
    }

    .btn-reject {
      background-color: #dc3545;
      color: white;
      border: none;
      padding: 6px 12px;
      border-radius: 6px;
      cursor: pointer;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: white;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <div class="logo">TIXpress Admin 🛠</div>
    <div class="nav-buttons">
      <button>Kembali</button>
      <button>Logout</button>
    </div>
  </div>

  <div class="verifikasi-box">
    <h2>Verifikasi Pembayaran</h2>
    <table>
      <thead>
        <tr>
          <th>Nama Pengguna</th>
          <th>Tanggal Order</th>
          <th>Jumlah</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <!-- Contoh baris data -->
        <tr>
          <td>Budi Santoso</td>
          <td>2025-05-30</td>
          <td>Rp 150.000</td>
          <td>Menunggu</td>
          <td class="action-buttons">
            <form action="/admin/verifikasi/1/setujui" method="POST">
              <button class="btn-approve" type="submit">Setujui</button>
            </form>
            <form action="/admin/verifikasi/1/tolak" method="POST">
              <button class="btn-reject" type="submit">Tolak</button>
            </form>
          </td>
        </tr>
        <!-- Tambahkan baris lainnya secara dinamis -->
      </tbody>
    </table>
  </div>

</body>
</html>