<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Lokasi - TIXpress</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
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
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        iframe {
            width: 100%;
            height: 450px;
            border: none;
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
                <div class="route">🚌 <strong>Terminal Surabaya → Terminal Yogyakarta </strong></div>
                <div class="datetime">Kamis, 19 Juni 2025 - 05.00</div>
            </div>
            <div class="info-box timer-box">
                <span>Estimasi Tiba</span>
                <div id="countdown" class="time-badge">-- : -- : --</div>
            </div>
        </div>

        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3959.446366795084!2d112.73793537420567!3d-7.319385192707222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m19!3e0!4m5!1s0x2dd7fbecf81ec51d%3A0xdac132ff47bb2a4e!2sTerminal%20Purabaya%20(Bungurasih)%2C%20Jl.%20Letjen%20Sutoyo%2C%20Bungurasih%2C%20Sidoarjo%2C%20Jawa%20Timur!3m2!1d-7.31939!2d112.74012499999999!4m5!1s0x2e7a5785c2fd92cd%3A0xd3e843eb251a5efb!2sTerminal%20Giwangan%2C%20Yogyakarta!3m2!1d-7.829649!2d110.401631!5e0!3m2!1sid!2sid!4v1718742214827!5m2!1sid!2sid"
                allowfullscreen 
                loading="lazy">
            </iframe>
        </div>
    </div>

    <script>
        // Set waktu estimasi tiba (contoh: 1 jam 5 menit 35 detik dari sekarang)
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

        updateCountdown(); // Jalankan sekali saat load
        const interval = setInterval(updateCountdown, 1000);
    </script>

</body>
</html>
