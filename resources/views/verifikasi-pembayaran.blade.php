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

    .action-buttons button {
      display: inline-block;
      margin-right: 5px;
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

    .btn-home {
      display: block;
      margin: 30px auto 0;
      padding: 12px 24px;
      background-color: white;
      color: #f57900;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      text-decoration: none;
      text-align: center;
      width: fit-content;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: white;
    }
  </style>
  <script>
    function setujuiPembayaran(button) {
      if (confirm("Setujui pembayaran ini?")) {
        const row = button.closest('tr');
        row.querySelector('.status-cell').textContent = "Disetujui";
        alert("Pembayaran telah disetujui.");
        // Optional: disable tombol setelah aksi
        button.disabled = true;
        button.nextElementSibling.disabled = true;
      }
    }

    function tolakPembayaran(button) {
      if (confirm("Tolak pembayaran ini?")) {
        const row = button.closest('tr');
        row.querySelector('.status-cell').textContent = "Ditolak";
        alert("Pembayaran telah ditolak.");
        button.disabled = true;
        button.previousElementSibling.disabled = true;
      }
    }
  </script>
</head>
<body>

  <div class="navbar">
    <div class="logo">TIXpress Admin 🛠</div>
    <div class="nav-buttons">
      <button onclick="window.history.back()">Kembali</button>
      <button onclick="location.href='/logout'">Logout</button>
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
          <td class="status-cell">Menunggu</td>
          <td class="action-buttons">
            <button type="button" class="btn-approve" onclick="setujuiPembayaran(this)">Setujui</button>
            <button type="button" class="btn-reject" onclick="tolakPembayaran(this)">Tolak</button>
          </td>
        </tr>
        <!-- Tambahkan baris lainnya -->
      </tbody>
    </table>

    <a href="/homeAdmin" class="btn-home">🏠 Kembali ke Home Admin</a>

  </div>

</body>
</html>
