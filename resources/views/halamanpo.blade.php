@extends('layout')

@section('content')
<div class="container">
    <form action="{{ route('tiket.detail') }}" method="GET">
        <!-- Filter Form -->
        <div class="search-bar">
            <select name="keberangkatan">
                <option value="Jember">Terminal Jember</option>
                <option value="Giwangan">Terminal Giwangan</option>
                <option value="Cicaheum">Terminal Cicaheum</option>
                <option value="Kalideres">Terminal Kalideres</option>
                <option value="Pulo Gebang">Terminal Pulo Gebang</option>
            </select>

            <select name="tujuan">
                <option value="Kartasura">Terminal Kartasura</option>
                <option value="Solo">Terminal Tirtonadi</option>
                <option value="Bandung">Terminal Leuwi Panjang</option>
                <option value="Yogyakarta">Terminal Jombor</option>
                <option value="Jakarta">Terminal Kampung Rambutan</option>
            </select>

            <input type="date" name="tanggal" required>
            <select name="penumpang">
                @for($i=1;$i<=6;$i++)
                    <option value="{{ $i }}">{{ $i }} Orang</option>
                @endfor
            </select>

            <button type="submit">Cari</button>
        </div>
    </form>

    <!-- Jadwal PO List -->
    <div class="jadwal-list">
        @foreach($poList as $po)
            <div class="card">
                <h3>{{ $po['nama'] }} <span class="badge">{{ $po['kelas'] }}</span></h3>
                <p><strong>Titik Naik:</strong> {{ $po['naik'] }} - {{ $po['jam'] }}</p>
                <p><strong>Titik Turun:</strong> {{ $po['turun'] }}</p>
                <p>Rp {{ number_format($po['harga_min'], 0, ',', '.') }} - Rp {{ number_format($po['harga_max'], 0, ',', '.') }}</p>
                <form action="{{ route('tiket.detail') }}" method="GET">
                    <input type="hidden" name="po" value="{{ $po['nama'] }}">
                    <button type="submit">Beli</button>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection
