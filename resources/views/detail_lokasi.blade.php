<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Detail Lokasi - TIXpress (Leaflet)</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <style>
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background: linear-gradient(to bottom right, #FFA500, #FF6600);
    }
    .header {
      background: white;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .logo {
      font-weight: 700;
      font-size: 24px;
      color: #FF6600;
    }
    .content {
      max-width: 900px;
      margin: 2rem auto;
    }
    .info-bar {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 1rem;
    }
    .info-box {
      background: white;
      padding: 1rem;
      border-radius: 10px;
      flex: 1;
      min-width: 300px;
      box-sizing: border-box;
    }
    .info-box .route {
      font-weight: 700;
      font-size: 16px;
    }
    .info-box .datetime {
      color: #333;
      font-size: 14px;
    }
    .timer-box {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .timer-box span {
      font-weight: bold;
      font-size: 14px;
    }
    .time-badge {
      background: red;
      color: white;
      font-weight: bold;
      padding: 6px 12px;
      border-radius: 8px;
      font-size: 18px;
      min-width: 100px;
      text-align: center;
    }
    .map-container {
      margin-top: 1rem;
      border-radius: 12px;
      overflow: hidden;
      height: 500px;
    }
    #map {
      width: 100%;
      height: 100%;
    }
  </style>
</head>
<body>

  <div class="header">
    <div class="logo">TIXpress</div>
  </div>

  <div class="content">
    <div class="info-bar">
      <div class="info-box">
        <div class="route">🚌 <strong>Terminal Surabaya → Terminal Yogyakarta</strong></div>
        <div class="datetime">Kamis, 19 Juni 2025 - 05.00</div>
      </div>
      <div class="info-box timer-box">
        <span>Estimasi Tiba</span>
        <div id="countdown" class="time-badge">-- : -- : --</div>
      </div>
    </div>

    <div class="map-container">
      <div id="map"></div>
    </div>
  </div>

  <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script>
    // Inisialisasi map
    var map = L.map('map').setView([-7.574, 111.5], 7);

    // Tile OpenStreetMap (gratis)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Koordinat Surabaya dan Jogja
    var surabaya = [-7.31939, 112.74012];
    var jogja = [-7.82965, 110.40163];

    // Marker awal & akhir
    var markerStart = L.marker(surabaya).addTo(map).bindPopup('Terminal Surabaya');
    var markerEnd = L.marker(jogja).addTo(map).bindPopup('Terminal Yogyakarta');

    // Rute polyline
    var routeCoordinates = [
      surabaya,
      [-7.5, 112],
      [-7.6, 111],
      [-7.7, 110.7],
      jogja
    ];

    var polyline = L.polyline(routeCoordinates, {color: 'red'}).addTo(map);
    map.fitBounds(polyline.getBounds());

    // Simulasi marker bus
    var busIcon = L.icon({
      iconUrl: 'https://maps.google.com/mapfiles/ms/icons/bus.png',
      iconSize: [32, 32],
      iconAnchor: [16, 16],
    });

    var busMarker = L.marker(surabaya, {icon: busIcon}).addTo(map);

    var currentIndex = 0;

    function moveBus() {
      if (currentIndex < routeCoordinates.length) {
        busMarker.setLatLng(routeCoordinates[currentIndex]);
        currentIndex++;
      }
    }

    setInterval(moveBus, 1000);

    // Countdown timer
    const countdownTarget = new Date(new Date().getTime() + (1 * 60 * 60 + 5 * 60 + 35) * 1000);

    function updateCountdown() {
      const now = new Date().getTime();
      const distance = countdownTarget - now;

      if (distance < 0) {
        document.getElementById("countdown").innerHTML = "00 : 00 : 00";
        clearInterval(interval);
        return;
      }

      const hours = String(Math.floor((distance / (1000 * 60 * 60)))).padStart(2, '0');
      const minutes = String(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))).padStart(2, '0');
      const seconds = String(Math.floor((distance % (1000 * 60)) / 1000)).padStart(2, '0');

      document.getElementById("countdown").innerHTML = `${hours} : ${minutes} : ${seconds}`;
    }

    updateCountdown();
    const interval = setInterval(updateCountdown, 1000);
  </script>

</body>
</html>
