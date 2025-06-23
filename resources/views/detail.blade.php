<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Detail Tiket</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #f57c00, #fbc02d);
      padding: 30px;
      color: #fff;
    }

    .container {
      max-width: 800px;
      margin: auto;
      background: #fff;
      border-radius: 12px;
      padding: 20px;
      color: #f57c00;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    .badge {
      background: #fbc02d;
      color: #fff;
      padding: 5px 12px;
      border-radius: 20px;
      font-weight: bold;
      font-size: 12px;
    }

    .button {
      background: #d32f2f;
      color: #fff;
      padding: 10px 24px;
      border-radius: 30px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    .button:hover {
      background: #b71c1c;
    }

    .button-kembali {
      background: #fb8c00;
      color: white;
      padding: 10px 24px;
      border-radius: 30px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    .button-kembali:hover {
      background: #ef6c00;
    }

    .flex-between {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 30px;
    }

    .rute-wrapper {
      position: relative;
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 30px 10px 10px;
      margin-top: 10px;
    }

    .rute-wrapper::before {
      content: '';
      position: absolute;
      top: 18px;
      left: 0;
      right: 0;
      height: 4px;
      background-color: #f57c00;
      z-index: 0;
    }

    .rute-item {
      position: relative;
      text-align: center;
      z-index: 1;
    }

    .dot {
      width: 10px;
      height: 10px;
      background-color: #f57c00;
      border-radius: 50%;
      margin: 0 auto;
    }

    .label {
      margin-top: 6px;
      font-size: 13px;
      color: #f57c00;
    }

  </style>
</head>
<body>

<div class="container">
  <h3 style="margin-bottom: 10px;">DETAIL TIKET</h3>

  <!-- Tanggal & PO -->
  <div style="font-weight: bold; font-size: 18px; margin-bottom: 5px;">
    {{ \Carbon\Carbon::parse($rute->tanggal)->isoFormat('dddd, D MMMM Y') }}
  </div>
  <div style="font-weight: bold; font-size: 20px; margin-bottom: 15px;">
    {{ strtoupper($bus->nomor) }}
  </div>

  <!-- Titik Naik/Turun -->
  <div style="display: flex; justify-content: space-between;">
    <div>
      <p><strong>● Titik Naik</strong><br>{{ $rute->asal }}</p>
      <p><strong>○ Titik Turun</strong><br>{{ $rute->tujuan }}</p>
    </div>
    <div style="text-align: right;">
      <p><strong>05.00</strong></p>
      <p style="font-size: 12px;">Estimasi Perjalanan 1 Jam</p>
    </div>
  </div>

  <!-- Fasilitas -->
  <div style="margin-top: 10px; display: flex; flex-wrap: wrap; gap: 8px;">
    <span class="badge">{{ $bus->kelas }}</span>
    <span class="badge">Air conditioner</span>
    <span class="badge">Snack</span>
    <span class="badge">Toilet</span>
    <span class="badge">Free Wifi</span>
  </div>

  <!-- Rute Perjalanan -->
  <p style="margin-top: 20px; background: #fff; color: #f57c00; display: inline-block; padding: 6px 16px; border-radius: 16px; font-weight: bold;">Rute Perjalanan :</p>
  
  <div class="rute-wrapper">
    <div class="rute-item">
      <div class="dot"></div>
      <div class="label">Terminal {{ $rute->asal }}</div>
    </div>
    <div class="rute-item">
      <div class="dot"></div>
      <div class="label">Rest Area 1</div>
    </div>
    <div class="rute-item">
      <div class="dot"></div>
      <div class="label">Rest Area 2</div>
    </div>
    <div class="rute-item">
      <div class="dot"></div>
      <div class="label">Terminal {{ $rute->tujuan }}</div>
    </div>
  </div>

  <!-- Harga & Kursi -->
  <div style="text-align: right; font-weight: bold;">
    <span style="font-size: 18px;">Rp {{ number_format($rute->harga, 0, ',', '.') }}</span><br>
    <small style="font-weight: normal; color: #888;">Tersedia {{ $jumlah_kursi }} Kursi</small>
  </div>

  <!-- Tombol Beli dan Kembali -->
  <div class="flex-between">
    <a href="{{ route('halamanpo') }}" class="button-kembali">Kembali</a>
    <a href="{{ route('pemesanan.form', ['rute' => $rute->id_rute]) }}" class="button">Beli</a>
  </div>
</div>

</body>
</html>
