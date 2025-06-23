<!-- resources/views/detail-akun.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Akun - TIXpress</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom right, #FFA500, #FF6600);
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 2rem;
            background: white;
            border-radius: 10px;
        }
        .header {
            padding: 1rem 2rem;
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-weight: bold;
            color: #FF6600;
            font-size: 24px;
        }
        .menu button {
            margin-left: 10px;
            padding: 6px 12px;
            border: none;
            border-radius: 5px;
            background: #FF9900;
            color: white;
            cursor: pointer;
        }
        h2, h3 {
            color: #FF6600;
        }
        .alert {
            background: #F0F8FF;
            border-left: 5px solid #007BFF;
            padding: 10px;
            margin-bottom: 20px;
        }
        .form-section {
            margin-bottom: 2rem;
        }
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
        }
        input, select {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .radio-group {
            display: flex;
            gap: 10px;
            margin-top: 5px;
        }
        .radio-group label {
            font-weight: normal;
        }
        .note {
            font-size: 12px;
            color: #666;
            margin-top: -10px;
        }
    </style>
</head>
<body>

    <div class="header">
        <div class="logo">TIXpress</div>
        <div class="menu">
            <button>Live Lokasi</button>
            <button>Pesanan</button>
            <button>Bobby</button>
        </div>
    </div>

    <div class="container">
        <h2>Detail Akun</h2>

        <div class="alert">
            <strong>INFORMASI PENTING</strong><br>
            Mantap! Segera lengkapi profilmu dengan mengisi detail data di menu <strong>Informasi Identitas</strong> dan <strong>Kontak Darurat</strong> dibawah ini.
            Dengan melengkapi profil ini kamu akan mendapatkan reward menarik dari TIXpress serta bagi kamu yang pertama kali daftar akan mendapatkan diskon <strong>10%</strong>. Jadi jangan ketinggalan!
        </div>

        <div class="form-section">
            <h3>Informasi Identitas</h3>
            <div class="form-grid">
                <div>
                    <label>Nama Lengkap</label>
                    <input type="text" value="Bobby Krisnawan">
                </div>
                <div>
                    <label>Kewarganegaraan</label>
                    <input type="text" value="Indonesia">
                </div>
                <div>
                    <label>Nomor Telepon</label>
                    <input type="text" value="089526648484">
                </div>
                <div>
                    <label>Nomor Induk Kependudukan (NIK)</label>
                    <input type="text" value="3471xxxxxxxxxxxx">
                    <div class="note">Catatan: Warga Negara Asing (WNA) boleh memasukkan nomor izin tinggal atau nomor paspor.</div>
                </div>
                <div>
                    <label>Email</label>
                    <input type="email" value="Bob.krisnawan@gmail.com">
                </div>
                <div>
                    <label>Jenis Kelamin</label>
                    <div class="radio-group">
                        <label><input type="radio" name="gender"> L</label>
                        <label><input type="radio" name="gender"> P</label>
                    </div>
                    <div class="note">*pilih salah satu</div>
                </div>
                <div>
                    <label>Tanggal Lahir</label>
                    <input type="text" value="19 / 10 / 2003">
                </div>
            </div>
        </div>

        <div class="form-section">
            <h3>Kontak Darurat</h3>
            <div class="form-grid">
                <div>
                    <label>Nama Lengkap</label>
                    <input type="text" value="Dona Marella">
                </div>
                <div>
                    <label>Nama Lengkap <span style="float:right;font-weight:normal;">*optional</span></label>
                    <input type="text" placeholder="Nama Lengkap">
                </div>
                <div>
                    <label>Nomor Telp</label>
                    <input type="text" value="089513264747">
                </div>
                <div>
                    <label>Nomor Telp</label>
                    <input type="text" placeholder="xxxxxxxxxxxx">
                </div>
                <div>
                    <label>Hubungan</label>
                    <input type="text" value="Istri Sah">
                </div>
                <div>
                    <label>Hubungan</label>
                    <input type="text" placeholder="Hubungan">
                </div>
            </div>
