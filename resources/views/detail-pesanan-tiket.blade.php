@extends('layouts.app')

@section('content')
<div class="container py-4" style="background: linear-gradient(to bottom, #ffe259, #ffa751); border-radius: 15px; max-width: 900px; margin: auto;">
    <div class="bg-white p-4 rounded shadow">
        <h5 class="text-danger font-weight-bold mb-3"><i class="fa fa-check-circle text-success"></i> Detail Pesanan Anda!</h5>

        <div class="text-center mb-4">
            <h5 class="font-weight-bold">Terminal Surabaya → Terminal Yogyakarta</h5>
            <div class="text-muted">Berangkat Pada : <span class="text-danger">Kamis, 19 Juni 2025 - 05.00</span></div>
            <div class="mt-2 text-uppercase font-weight-bold text-danger">Kode Booking<br>{{ $id_bayar ?? '-' }}</div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="font-weight-bold">Kode Pembayaran</label>
                <input type="text" class="form-control mb-2" value="{{ $id_bayar ?? '-' }}" readonly>
            </div>
            <div class="col-md-6">
                <h6 class="font-weight-bold">Detail Pembayaran</h6>
                <table class="table table-sm table-borderless">
                    <tr><td>Harga Tiket</td><td class="text-right">Rp 230,000</td></tr>
                    <tr><td>Potongan Voucher</td><td class="text-right">-Rp 0</td></tr>
                    <tr><td>Biaya Admin</td><td class="text-right">Rp 0</td></tr>
                    <tr><td>Biaya Asuransi</td><td class="text-right">Rp 20,000</td></tr>
                    <tr><td>Pajak</td><td class="text-right">15%</td></tr>
                    <tr><th>Total Bayar</th><th class="text-right">Rp 250,000</th></tr>
                </table>
            </div>
        </div>

        <hr>

        <div class="row mt-4">
            <div class="col-md-6">
                <h6 class="font-weight-bold">Data Penumpang</h6>
                <p><i class="fa fa-user text-danger"></i> <strong>Nama Pemesan:</strong> {{ $user->nama ?? 'Mimi mimi' }}</p>
                <p><i class="fa fa-phone text-danger"></i> <strong>No Telp:</strong> {{ $user->no_telp ?? '12345678' }}</p>
                <p><i class="fa fa-chair text-danger"></i> <strong>No Kursi:</strong> {{ $kursi->nomor ?? '5' }}</p>
            </div>
            <div class="col-md-6">
                <h6 class="font-weight-bold">&nbsp;</h6>
                <p><i class="fa fa-clock text-danger"></i> <strong>Waktu Pesan:</strong> 18 Juni 2025 09:30</p>
                <p><i class="fa fa-ticket-alt text-danger"></i> <strong>No Tiket:</strong> {{ $tiket->id_tiket ?? '-' }} </p>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('homeUser') }}" class="btn btn-warning">
                <i class="fa fa-home"></i> Kembali ke Beranda
            </a>
        </div>
    </div>
</div>
@endsection
