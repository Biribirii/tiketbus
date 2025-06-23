<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>TIXpress - Home</title>
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

    .search-box {
      background-color: #fff3;
      margin: 40px auto;
      padding: 30px;
      width: 90%;
      max-width: 850px;
      border-radius: 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .search-box select,
    .search-box input[type="date"] {
      padding: 10px;
      border: none;
      border-radius: 8px;
      min-width: 150px;
      font-size: 14px;
    }

    .search-box button {
      background-color: #00303f;
      color: white;
      padding: 10px 25px;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
    }

    .transport-options {
      text-align: center;
      margin-top: 30px;
    }

    .mitra-section {
      background-color: white;
      margin: 40px auto;
      padding: 30px;
      width: 90%;
      max-width: 800px;
      border-radius: 20px;
      color: #333;
      text-align: center;
    }

    .mitra-logos {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      gap: 20px;
      margin-top: 20px;
    }

    .mitra-logos img {
      max-height: 50px;
      object-fit: contain;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <div class="logo">TIXpress 🚍</div>
    <div class="nav-buttons">
      <a href="{{ route('lokasi_bus') }}">
        <button type="button">Live Lokasi</button>
      </a>
      <a href="{{ route('pesanan') }}">
        <button type="button">Pesanan</button>
     </a>
      <a href="{{ route('akun.pengguna') }}">
        <button type="button"> Account </button>
      </a>
    </div>
  </div>

  <form class="search-box" method="GET" action="{{ route('halamanpo') }}">
  @csrf
  <div>
    <label for="asal">Keberangkatan : </label><br>
    <select id="asal" name="asal" required>
      <option value="" selected disabled> Pilih Keberangkatan </option>
      <option>Jakarta</option>
      <option>Surabaya</option>
      <option>Bandung</option>
      <option>Yogyakarta</option>
      <option>Semarang</option>
      <option>Medan</option>
      <option>Palembang</option>
      <option>Makassar</option>
      <option>Denpasar</option>
      <option>Pontianak</option>
    </select>
  </div>

  <div>
    <label for="tujuan">Tujuan : </label><br>
    <select id="tujuan" name="tujuan" required>
      <option value="" selected disabled>Pilih Tujuan</option>
      <option>Jakarta</option>
      <option>Surabaya</option>
      <option>Bandung</option>
      <option>Yogyakarta</option>
      <option>Semarang</option>
      <option>Medan</option>
      <option>Palembang</option>
      <option>Makassar</option>
      <option>Denpasar</option>
      <option>Pontianak</option>
    </select>
  </div>

  <div>
    <label for="tanggal">Tanggal : </label><br>
    <input type="date" id="tanggal" name="tanggal" required>
  </div>

  <div>
    <label for="penumpang">Jumlah Penumpang : </label><br>
    <select id="penumpang" name="penumpang" required>
        @for($i = 1; $i <= 6; $i++)
            <option value="{{ $i }}">{{ $i }} Orang</option>
        @endfor
    </select>
  </div>

  <div>
    <label>&nbsp;</label><br>
    <button type="submit">Cari</button>
  </div>
</form>


  <div class="transport-options">
    <span>🚌 Bus Antarkota</span> &nbsp;&nbsp;
    <span>🚐 Shuttle Bus</span>
  </div>

  
  <div class="mitra-section">
    <h3>PERUSAHAAN MITRA</h3>
    <div class="mitra-logos">
      <img src="/images/partner1.png" alt="Partner 1">
      <img src="/images/partner2.png" alt="Partner 2">
      <img src="/images/partner3.png" alt="Partner 3">
      <img src="/images/partner4.png" alt="Partner 4">
      <img src="/images/partner5.png" alt="Partner 5">
      <img src="/images/partner6.png" alt="Partner 6">
    </div>
  </div>
</body>
</html>
