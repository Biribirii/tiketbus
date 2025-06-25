@extends('layouts.app')

@section('content')
<div class="container py-4" style="max-width: 900px; margin: auto;">
    <div class="bg-white p-4 rounded shadow-sm" style="border-top: 10px solid #f60;">
        <h4 class="font-weight-bold text-center mb-4 text-warning">Formulir Pembatalan Perjalanan</h4>

        <div class="alert alert-danger d-flex align-items-center">
            <i class="fa fa-exclamation-circle mr-2"></i>
            <strong>Detail Pesanan Anda!</strong>
        </div>

        <<div class="text-center mb-4">
            <h5 class="font-weight-bold">Terminal Surabaya → Terminal Yogyakarta</h5>
            <div class="text-muted">Berangkat Pada : <span class="text-danger">Kamis, 19 Juni 2025 - 05.00</span></div>
            <div class="mt-2 text-uppercase font-weight-bold text-danger">Kode Booking<br>{{ $kode_booking ?? 'KBG2RFMB' }}</div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="font-weight-bold">Kode Pembayaran</label>
                <input type="text" class="form-control mb-2" value="{{ $kode_pembayaran ?? 'KPL0NHVL' }}" readonly>
            </div>

            <!-- Kanan -->
            <div class="col-md-6">
                <div class="border rounded p-3 bg-light">
                    <p class="mb-1">Harga Tiket <span class="float-right">Rp 100,000</span></p>
                    <p class="mb-1">Potongan Voucher <span class="float-right">- Rp 0</span></p>
                    <p class="mb-1">Biaya Admin <span class="float-right">- Rp 0</span></p>
                    <p class="mb-1">Biaya Asuransi <span class="float-right">Rp 20,000</span></p>
                    <p class="mb-1">Pajak <span class="float-right">Rp 15,000</span></p>
                    <hr>
                    <p class="font-weight-bold">Total Bayar <span class="float-right">Rp 135,000</span></p>
                </div>
            </div>
        </div>

        <hr>

        <!-- Data Penumpang -->
        <div class="row mt-4">
            <div class="col-md-6">
                <h6 class="font-weight-bold">Data Penumpang</h6>
                <p><i class="fa fa-user text-danger"></i> <strong>Nama Pemesan:</strong> {{ $user->nama ?? 'Mimira' }}</p>
                <p><i class="fa fa-phone text-danger"></i> <strong>No Telp:</strong> {{ $user->no_telp ?? '0123456789' }}</p>
            </div>
            <div class="col-md-6">
                <h6 class="font-weight-bold">&nbsp;</h6>
                <p><i class="fa fa-clock text-danger"></i> <strong>Waktu Pesan:</strong> 18 Juni 2025 09:30</p>
                <p><i class="fa fa-ticket-alt text-danger"></i> <strong>No Tiket:</strong> {{ $tiket->id_tiket ?? 'G4M201819RA' }} </p>
            </div>
        </div>

        <!-- S&K Pembatalan -->
        <div class="mt-4 p-3 bg-warning rounded shadow-sm">
            <h6 class="font-weight-bold text-danger"><i class="fa fa-exclamation-triangle mr-2"></i>S&K Pembatalan Tiket</h6>
            <ul class="mb-0" style="list-style-type: decimal; padding-left: 20px;">
                <li>≥ 6 jam sebelum jam keberangkatan tidak ada potongan dari pembayaran tiket</li>
                <li>≥ 4 jam sebelum jam keberangkatan potongan 25% dari pembayaran tiket</li>
                <li>≥ 2 jam sebelum jam keberangkatan potongan 50% dari pembayaran tiket</li>
                <li>≤ 1 jam sebelum jam keberangkatan <strong>pembayaran tiket tidak dikembalikan</strong>.</li>
            </ul>
        </div>

        <!-- Pesan Sukses -->
        @if(session('berhasil_batal'))
        <div class="alert alert-success mt-4" role="alert">
            <strong>{{ session('berhasil_batal') }}</strong>
        </div>
        @endif

        <!-- Tombol Konfirmasi -->
        <form action="{{ route('pembatalan.konfirmasi', ['kode_booking' => 'KTS250413HY25']) }}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin membatalkan tiket perjalanan anda bersama TIXpress?')">
            @csrf
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-success font-weight-bold mr-2 px-4">KONFIRMASI PEMBATALAN</button>
                <a href="{{ url('/pesanan') }}" class="btn btn-danger font-weight-bold px-4">CANCEL PEMBATALAN</a>
            </div>
        </form>
    </div>
</div>
@endsection

