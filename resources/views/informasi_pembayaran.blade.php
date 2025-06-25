@extends('layouts.app')

@section('content')
<div class="container py-4" style="background: linear-gradient(to bottom, #ffe259, #ffa751); border-radius: 15px; max-width: 800px; margin: auto;">
    <h4 class="text-center font-weight-bold mb-4 text-danger">Informasi Pembayaran</h4>

    <div class="d-flex justify-content-between mb-3">
        <div style="width: 55%;">
            <h5 class="font-weight-bold">Data Penumpang</h5>
            <div class="mb-2">
                <strong>Nama Penumpang:</strong> {{ session('data_pemesanan')['nama'] ?? '-' }} <br>
            </div>
            <div class="mb-2">
                <strong>Telepon:</strong> {{ session('data_pemesanan')['telepon'] ?? '-' }} <br>
            </div>
            <div class="mb-2">
                <strong>Email:</strong> {{ session('data_pemesanan')['email'] ?? '-' }} <br>
            </div>

            <small class="text-muted">*Data ini digunakan untuk mengirimkan informasi tiket</small>
        </div>

        <div style="background-color: #e74c3c; color: white; border-radius: 10px; padding: 1rem; width: 40%;">
            <h6 class="font-weight-bold mb-3">Detail Keberangkatan</h6>
            <p class="mb-1"><strong>Bus:</strong> {{ $bus->nomor ?? 'Tidak tersedia' }}</p>
            <p class="mb-1">Terminal Asal: <strong>{{ optional($rute)->asal }}</strong></p>
            <p class="mb-1">Terminal Tujuan: <strong>{{ optional($rute)->tujuan }}</strong></p>
            <p class="mb-1">Tanggal: <strong>{{ $rute->tanggal ?? '19/06/2025' }}</strong></p>
            <p class="mb-1">Waktu: <strong>{{ $rute->waktu ?? '05:00' }}</strong></p>

            <p class="mb-1">Harga: <strong>Rp {{ number_format($harga ?? 0, 0, ',', '.') }}</strong></p>
        </div>
    </div>

    <div class="mt-3 mb-4">
        <h5 class="font-weight-bold">Metode Pembayaran</h5>
        <div class="bg-light p-3 rounded">
            <p>Transfer Bank ke:</p>
            <p class="mb-0"><strong>50361487884</strong> a.n <strong>PT TIXpress</strong></p>
        </div>
    </div>

    <div class="mb-4">
        <h5 class="font-weight-bold">Detail Harga</h5>
        <table class="table table-borderless">
            <tr>
                <td>Harga Tiket</td>
                <td class="text-right">
                    Rp 100.000
                </td>
            </tr>
            <tr>
                <td>Potongan Voucher</td>
                <td class="text-right">-Rp 0</td>
            </tr>
            <tr>
                <td>Pajak</td>
                <td class="text-right"> 
                    Rp {{ number_format(100000 * 0.15) }} </td>
            </tr>
            <tr>
                <td>Biaya Admin</td>
                <td class="text-right">Rp 0</td>
            </tr>
            <tr>
                <td>Biaya Asuransi</td>
                <td class="text-right">Rp 20.000</td>
            </tr>
            <tr>
                <td><strong>Total Bayar</strong></td>
                <td class="text-right">
                    <strong>Rp {{ number_format(($harga ?? 0) + 20000 + 15000, 0, ',', '.') }}</strong>
                </td>
            </tr>

            </tr>
        </table>
    </div>

    <div class="d-flex justify-content-between">
        <a href="{{ url()->previous() }}"
           style="background-color: #fb8c00; color: white; padding: 10px 24px; border-radius: 30px; font-weight: bold; text-decoration: none; transition: background 0.3s ease;">
           Sebelumnya
        </a>

        <a href="{{ route('pembayaran.proses') }}"
           style="background-color: #d32f2f; color: white; padding: 10px 28px; border-radius: 30px; font-weight: bold; text-decoration: none; transition: background 0.3s ease;">
           Bayar Sekarang 
        </a>
    </div>
</div>
@endsection
