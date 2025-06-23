<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pilih Kursi - TIXpress</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(to right, #f26e09, #f9b206);
    }
    .topbar {
      display: flex;
      justify-content: flex-end;
      padding: 20px;
      gap: 15px;
    }
    .topbar button {
      padding: 8px 16px;
      border: none;
      border-radius: 30px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
    .topbar .profile {
      background: white;
      color: #f26e09;
    }
    .container {
      display: flex;
      padding: 40px;
    }
    .sidebar {
      color: white;
      font-weight: bold;
      font-size: 24px;
      width: 30%;
      padding-top: 100px;
    }
    .content {
      background: white;
      border-radius: 14px;
      width: 70%;
      padding: 30px;
      box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    }
    .rute {
      font-weight: 700;
      font-size: 24px;
      color: #f26e09;
    }
    .jadwal {
      margin-top: 5px;
      color: #f9a602;
      font-style: italic;
    }
    .seat-layout {
      margin-top: 30px;
      display: flex;
      justify-content: center;
    }
    .bus {
      background: #f6f6f6;
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 6px;
    }
    .supir {
      text-align: center;
      font-size: 12px;
      margin-bottom: 10px;
      font-weight: bold;
    }
    .row {
      display: flex;
      gap: 60px;
    }
    .column {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    .seat {
      width: 50px;
      height: 50px;
      border-radius: 6px;
      background: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      border: 1px solid #ccc;
      cursor: pointer;
    }
    .seat.booked {
      background: #ccc;
      pointer-events: none;
    }
    .seat.selected {
      background: #e63946;
      color: white;
    }
    .toilet {
      margin-top: 20px;
      text-align: center;
      border: 1px solid black;
      padding: 5px;
      font-size: 12px;
      background: white;
    }
    .legend {
      margin-top: 20px;
      display: flex;
      justify-content: center;
      gap: 30px;
      font-size: 14px;
    }
    .legend-item {
      display: flex;
      align-items: center;
      gap: 5px;
    }
    .legend-box {
      width: 15px;
      height: 15px;
      border: 1px solid #ccc;
    }
    .booked-box { background: #ccc; }
    .selected-box { background: #e63946; }
    .empty-box { background: white; }
    .note {
      font-size: 12px;
      margin-top: 10px;
      text-align: center;
    }
    .note strong {
      color: red;
    }
    #next-button-container {
      display: none;
      text-align: center;
      margin-top: 20px;
    }
    #next-button-container button {
      background: #2e7d32;
      color: white;
      padding: 12px 24px;
      border: none;
      border-radius: 25px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="topbar">
    <button style="background:#fff;color:#f26e09">Live Lokasi</button>
    <button style="background:#fff;color:#f26e09">Pesanan</button>
    <button class="profile">👤Mimi</button>
  </div>

  <div class="container">
    <div class="sidebar">
      Pilih pada <br> kursi yang <br> tersedia
    </div>
    <div class="content">
      <div class="rute">Jombor → Kartasura</div>
      <div class="jadwal">Kamis, 17 Maret 2025,<br>05.00 - 06.00</div>
      <div class="seat-layout">
        <div class="bus">
          <div class="supir">Supir</div>
          <div class="row">
            <div class="column">
              <div class="seat">1</div>
              <div class="seat">8</div>
              <div class="seat">9</div>
              <div class="seat">16</div>
              <div class="seat">17</div>
              <div class="seat">24</div>
            </div>
            <div class="column">
              <div class="seat">2</div>
              <div class="seat">7</div>
              <div class="seat">10</div>
              <div class="seat">15</div>
              <div class="seat">18</div>
              <div class="seat">23</div>
            </div>
            <div class="column">
              <div class="seat">3</div>
              <div class="seat">6</div>
              <div class="seat">11</div>
              <div class="seat">14</div>
              <div class="seat">19</div>
              <div class="seat">22</div>
            </div>
            <div class="column">
              <div class="seat">4</div>
              <div class="seat">5</div>
              <div class="seat">12</div>
              <div class="seat">13</div>
              <div class="seat">20</div>
              <div class="seat">21</div>
            </div>
          </div>
          <div class="toilet">Toilet</div>
        </div>
      </div>
      <div class="legend">
        <div class="legend-item"><div class="legend-box booked-box"></div>Sudah di booking</div>
        <div class="legend-item"><div class="legend-box selected-box"></div>Pilihan Anda</div>
        <div class="legend-item"><div class="legend-box empty-box"></div>Kosong</div>
      </div>
      <div class="note">
        <strong>Catatan:</strong> Kursi sewaktu dapat dipesan oleh pengguna lain yang terlebih dahulu menyelesaikan pembeliannya
      </div>

      <!-- Tombol Selanjutnya -->
      <div id="next-button-container">
        <form action="{{ route('informasi.pembayaran') }}" method="GET">
            <input type="hidden" name="kursi" id="kursiTerpilih">
            <button type="submit">Lanjut ke Pembayaran</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Script untuk handle klik kursi -->
  <script>
    const seats = document.querySelectorAll('.seat');
    const nextButtonContainer = document.getElementById('next-button-container');
    const kursiTerpilihInput = document.getElementById('kursiTerpilih');

    seats.forEach(seat => {
      seat.addEventListener('click', () => {
        // Reset semua seat
        seats.forEach(s => s.classList.remove('selected'));

        // Tandai kursi ini
        seat.classList.add('selected');

        // Simpan nomor kursi
        kursiTerpilihInput.value = seat.textContent;

        // Tampilkan tombol
        nextButtonContainer.style.display = 'block';
      });
    });
  </script>
</body>
</html>

//pilih-kursi