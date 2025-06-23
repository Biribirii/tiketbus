@extends('layouts.app')

@section('content')
<div class="container py-4" style="max-width: 900px; margin: auto;">
    <div class="bg-white p-4 rounded shadow-sm" style="border-top: 10px solid #f60;">
        <h4 class="font-weight-bold text-center mb-4 text-warning">Formulir Pembatalan Perjalanan</h4>

        <div class="alert alert-danger d-flex align-items-center">
            <i class="fa fa-exclamation-circle mr-2"></i>
            <strong>Detail Pesanan Anda!</strong>
        </div>

        <div class="text-center mb-3">
            <h5 class="font-weight-bold">Terminal Jombor → Terminal Kartasura</h5>
            <p class="mb-0 text-muted">Berangkat Pada : <strong class="text-danger">Senin, 14 April 2025 - 05.00</strong></p>
            <p class="mt-2">Kode Booking<br><span class="text-danger font-weight-bold h5">KTS250413HY25</span></p>
        </div>

        <div class="row">
            <!-- Kiri -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Kode Pembayaran</label>
                    <input type="text" class="form-control" value="TFBK2025130410" readonly>
                </div>
                <div class="form-group">
                    <label>Batas Pembayaran</label>
                    <input type="text" class="form-control" value="13 Apr 2025 10:10" readonly>
                </div>
                <div class="form-group">
                    <label>Metode Pembayaran</label>
                    <input type="text" class="form-control" value="Bank Transfer" readonly>
                </div>
                <div class="form-group">
                    <label>Nomor Rekening</label>
                    <input type="text" class="form-control" value="1958622xxxx" readonly>
                </div>
                <p class="text-danger small">* Harap diisi dengan benar, kesalahan ditanggung individu.</p>
            </div>

            <!-- Kanan -->
            <div class="col-md-6">
                <div class="border rounded p-3 bg-light">
                    <p class="mb-1">Harga Tiket <span class="float-right">Rp 230,000</span></p>
                    <p class="mb-1">Potongan Voucher <span class="float-right">- Rp 0</span></p>
                    <p class="mb-1">Biaya Admin <span class="float-right">- Rp 0</span></p>
                    <p class="mb-1">Biaya Asuransi <span class="float-right">Rp 20,000</span></p>
                    <p class="mb-1">Pajak <span class="float-right">15%</span></p>
                    <hr>
                    <p class="font-weight-bold">Total Bayar <span class="float-right">Rp 250,000</span></p>
                </div>
            </div>
        </div>

        <hr>

        <!-- Data Penumpang -->
        <div class="row">
            <div class="col-md-6">
                <h6 class="font-weight-bold">Data Penumpang</h6>
                <p class="mb-1"><i class="fa fa-user text-danger mr-2"></i><strong>Bobby Krisnawan</strong></p>
                <p class="mb-1"><i class="fa fa-phone-alt text-danger mr-2"></i>089526648484</p>
                <p class="mb-1"><i class="fa fa-chair text-danger mr-2"></i>No Kursi: 15</p>
            </div>
            <div class="col-md-6">
                <h6 class="font-weight-bold text-white">&nbsp;</h6>
                <p class="mb-1"><i class="fa fa-envelope text-danger mr-2"></i>Bob.krisnawan@gmail.com</p>
                <p class="mb-1"><i class="fa fa-clock text-danger mr-2"></i>13 April 2025 09:25</p>
                <p class="mb-1"><i class="fa fa-ticket-alt text-danger mr-2"></i>TRHY25200413010</p>
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

