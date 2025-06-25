<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pilih Kursi - TIXpress</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Inter', sans-serif; background: linear-gradient(to right, #f26e09, #f9b206); }
    .topbar { display: flex; justify-content: flex-end; padding: 20px; gap: 15px; }
    .topbar button { padding: 8px 16px; border: none; border-radius: 30px; font-weight: bold; cursor: pointer; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); }
    .topbar .profile { background: white; color: #f26e09; }
    .container { display: flex; padding: 40px; }
    .sidebar { color: white; font-weight: bold; font-size: 24px; width: 30%; padding-top: 100px; }
    .content { background: white; border-radius: 14px; width: 70%; padding: 30px; box-shadow: 0 5px 10px rgba(0,0,0,0.1); }
    .rute { font-weight: 700; font-size: 24px; color: #f26e09; }
    .jadwal { margin-top: 5px; color: #f9a602; font-style: italic; }
    .seat-layout { margin-top: 30px; display: flex; justify-content: center; }
    .bus { background: #f6f6f6; border: 1px solid #ccc; padding: 20px; border-radius: 6px; }
    .supir { text-align: center; font-size: 12px; margin-bottom: 10px; font-weight: bold; }
    .row { display: flex; gap: 60px; }
    .column { display: flex; flex-direction: column; gap: 20px; }
    .seat { width: 50px; height: 50px; border-radius: 6px; background: white; display: flex; align-items: center; justify-content: center; font-weight: bold; border: 1px solid #ccc; cursor: pointer; }
    .seat.booked { background: #ccc; pointer-events: none; }
    .seat.selected { background: #e63946; color: white; }
    .toilet { margin-top: 20px; text-align: center; border: 1px solid black; padding: 5px; font-size: 12px; background: white; }
    .legend { margin-top: 20px; display: flex; justify-content: center; gap: 30px; font-size: 14px; }
    .legend-item { display: flex; align-items: center; gap: 5px; }
    .legend-box { width: 15px; height: 15px; border: 1px solid #ccc; }
    .booked-box { background: #ccc; }
    .selected-box { background: #e63946; }
    .empty-box { background: white; }
    .note { font-size: 12px; margin-top: 10px; text-align: center; }
    .note strong { color: red; }
    #next-button-container { display: none; text-align: center; margin-top: 20px; }
    #next-button-container button { background: #2e7d32; color: white; padding: 12px 24px; border: none; border-radius: 25px; font-size: 16px; font-weight: bold; cursor: pointer; }
  </style>
</head>
<body>
  @php
    $jumlahPenumpang = session('jumlah_penumpang') ?? 1;
    $user = (object)[
            'nama' => session('nama'),
            'no_telp' => session('telepon'),
            'email' => session('email'),
            'id_user' => session('user_id') ?? null // tambahkan jika memang punya user_id
        ];
  @endphp

  <div class="topbar">
    <button style="background:#fff;color:#f26e09">Live Lokasi</button>
    <button style="background:#fff;color:#f26e09">Pesanan</button>
    <button class="profile"> Account </button>
  </div>

  <div class="container">
    <div class="sidebar">
      Pilih pada <br> kursi yang <br> tersedia
    </div>
       <div class="content">
      <div class="rute"> Surabaya → Yogyakarta</div>
      <div class="jadwal">Kamis, 19 Juni 2025,<br>05.00 - 09.10</div>
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

      <div id="next-button-container">
        <form action="{{ route('informasi.pembayaran') }}" method="GET">
            <div id="kursiContainer"></div>
            <input type="hidden" name="bus_id" value="{{ $busId }}">
            <button type="submit">Lanjut ke Pembayaran</button>
        </form>
      </div>
    </div>
  </div>

<script>

  const seats = document.querySelectorAll('.seat');
  const nextButtonContainer = document.getElementById('next-button-container');
  const kursiContainer = document.getElementById('kursiContainer');

  let kursiTerpilih = [];
  const jumlahPenumpang = {{ $jumlahPenumpang }};

  function renderHiddenInputs() {
    kursiContainer.innerHTML = '';
    kursiTerpilih.forEach(nomor => {
      const input = document.createElement('input');
      input.type = 'hidden';
      input.name = 'kursi[]';
      input.value = nomor;
      kursiContainer.appendChild(input);
    });
  }

  seats.forEach(seat => {
    seat.addEventListener('click', () => {
      const nomor = seat.textContent.trim();

      if (seat.classList.contains('selected')) {
        seat.classList.remove('selected');
        kursiTerpilih = kursiTerpilih.filter(n => n !== nomor);
      } else {
        if (kursiTerpilih.length >= jumlahPenumpang) {
          alert(`Maksimal memilih ${jumlahPenumpang} kursi`);
          return;
        }
        kursiTerpilih.push(nomor);
        seat.classList.add('selected');
      }

      renderHiddenInputs();
      nextButtonContainer.style.display = kursiTerpilih.length === jumlahPenumpang ? 'block' : 'none';
    });
  });
</script>
</body>
</html>