<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Verifikasi Reschedule | TIXpress Admin</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #f7971e, #ffd200);
      margin: 0;
      padding: 0;
    }
    .header {
      background-color: #e8880f;
      padding: 15px;
      color: white;
      font-size: 22px;
      font-weight: bold;
    }
    .container {
      margin: 50px auto;
      width: 800px;
      background-color: #fbb040;
      padding: 30px;
      border-radius: 12px;
      text-align: center;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 25px;
    }
    th, td {
      padding: 12px;
      border: 1px solid #f97e0e;
    }
    th {
      background-color: #f97e0e;
      color: white;
    }
    .button {
      padding: 8px 18px;
      border: none;
      border-radius: 8px;
      color: white;
      font-size: 14px;
      cursor: pointer;
    }
    .approve {
      background-color: #4CAF50;
    }
    .reject {
      background-color: #F44336;
    }
    .back {
      background-color: #fff;
      border: 2px solid #f97e0e;
      color: #f97e0e;
      padding: 8px 16px;
      border-radius: 8px;
      text-decoration: none;
    }
  </style>
  <script>
    function approveReschedule(button) {
      if (confirm("Setujui permintaan reschedule ini?")) {
        const row = button.closest("tr");
        row.querySelector(".status-cell").textContent = "Disetujui";
        alert("Permintaan reschedule berhasil disetujui.");
        disableButtons(row);
      }
    }

    function rejectReschedule(button) {
      if (confirm("Tolak permintaan reschedule ini?")) {
        const row = button.closest("tr");
        row.querySelector(".status-cell").textContent = "Ditolak";
        alert("Permintaan reschedule telah ditolak.");
        disableButtons(row);
      }
    }

    function disableButtons(row) {
      const buttons = row.querySelectorAll("button");
      buttons.forEach(btn => btn.disabled = true);
    }
  </script>
</head>
<body>
  <div class="header">TIXpress Admin ⚙️</div>
  <div class="container">
    <h2>Verifikasi Reschedule</h2>
    <table>
      <tr>
        <th>Nama Pengguna</th>
        <th>Tanggal Order Awal</th>
        <th>Tanggal Baru</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
      <tr>
        <td>Budi Santoso</td>
        <td>2025-05-30</td>
        <td>2025-06-10</td>
        <td class="status-cell">Menunggu</td>
        <td>
          <button class="button approve" onclick="approveReschedule(this)">Setujui</button>
          <button class="button reject" onclick="rejectReschedule(this)">Tolak</button>
        </td>
      </tr>
    </table>

    <a href="/homeAdmin" class="back">🏠 Kembali ke Home Admin</a>
  </div>
</body>
</html>
