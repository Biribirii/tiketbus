<!-- resources/views/lokasi_bus.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lokasi Bus - TIXpress</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            background: linear-gradient(to bottom right, #FFA500, #FF6600);
        }
        .header {
            background: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
        }
        .logo {
            font-weight: 700;
            font-size: 24px;
            color: #FF6600;
        }
        .menu button {
            background: #FF9900;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 20px;
            margin-left: 10px;
            cursor: pointer;
            font-weight: 600;
        }
        .container {
            max-width: 800px;
            margin: 2rem auto;
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
        }
        .title {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 18px;
        }
        .subtitle {
            color: red;
            margin-top: 4px;
            margin-bottom: 16px;
            font-size: 14px;
        }
        .card {
            padding: 1rem;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-bottom: 10px;
            background: #fff;
            cursor: pointer;
            transition: background 0.2s ease-in-out;
            text-decoration: none;
            color: inherit;
            display: block;
        }
        .card:hover {
            background: #f9f9f9;
        }
        .card.disabled {
            background: #eee;
            color: #aaa;
            cursor: not-allowed;
            pointer-events: none;
        }
        .card .route {
            font-weight: bold;
            font-size: 16px;
        }
        .card .datetime {
            font-size: 14px;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="header">
        <div class="logo">TIXpress</div>
        <div class="menu">
            <button>Live Lokasi</button>
            <button>Pesanan</button>
            <button>👤Mimi </button>
        </div>
    </div>

    <div class="container">
        <div class="title">
            🚌 LOKASI BUS
        </div>
        <div class="subtitle">
            Silahkan pilih jadwal anda untuk mengetahui titik lokasi Bus
        </div>

        <!-- Jadwal aktif (klik akan menuju ke detail_lokasi) -->
        <a href="{{ url('/detail-lokasi') }}" class="card">
            <div class="route">Terminal Surabaya → Terminal Yogyakarta </div>
            <div class="datetime">Kamis, 19 Juni 2025 - 05.00</div>
        </a>

        <!-- Jadwal non-aktif -->
        <div class="card disabled">
            <div class="route">Yogyakarta → Denpasar</div>
            <div class="datetime">Selasa, 2 Februari 2025 - 03.00</div>
        </div>

        <div class="card disabled">
            <div class="route">Bandung → Malang</div>
            <div class="datetime">Jumat, 28 Januari 2025 - 12.00</div>
        </div>

        <div class="card disabled">
            <div class="route">Semarang → Solo</div>
            <div class="datetime">Selasa, 25 Januari 2025 - 21.00</div>
        </div>
    </div>

</body>
</html>
