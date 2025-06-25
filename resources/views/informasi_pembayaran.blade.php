<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Informasi Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: auto;
        }
        h2 {
            margin-top: 0;
        }
        .item {
            margin-bottom: 15px;
        }
        ul {
            padding-left: 20px;
        }
    </style>
</head>
<body>
{{-- <pre>
    {{ print_r(session()->all(), true) }}
</pre> --}}

<div class="card">
    <h2>Informasi Pembayaran</h2>

    <strong>Nama:</strong> {{ session('data_pemesanan')['nama'] ?? '-' }} <br>
    <strong>Telepon:</strong> {{ session('data_pemesanan')['telepon'] ?? '-' }} <br>
    <strong>Email:</strong> {{ session('data_pemesanan')['email'] ?? '-' }} <br>


    <div class="item">
        <strong>Nomor Kursi:</strong><br>
        <ul>
            @forelse ($kursi as $k)
                <li>{{ $k->nomor ?? 'Tidak diketahui' }}</li>
            @empty
                <li>Tidak ada kursi yang dipilih</li>
            @endforelse
        </ul>
    </div>

    <div class="item">
        <strong>Nama Bus:</strong><br>
        {{ optional($bus)->nama ?? 'Tidak tersedia' }}
    </div>

    <div class="item">
        <strong>Rute:</strong><br>
        {{ optional($rute)->asal ?? '' }} → {{ optional($rute)->tujuan ?? '' }}
    </div>

    <div class="item">
        <strong>Total Harga Tiket:</strong><br>
        @php
            $totalHarga = is_array($kursi) ? count($kursi) * $harga : $harga;
        @endphp
        Rp {{ number_format($totalHarga, 0, ',', '.') }}
    </div>
</div>

</body>
</html>
