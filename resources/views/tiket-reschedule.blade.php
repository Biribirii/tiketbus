@extends('layouts.app')

@section('content')
<div class="card p-4 card-custom">
    <h5 class="text-danger font-weight-bold mb-4">
        <i class="fas fa-check-circle mr-2"></i>Detail Pesanan Anda!
    </h5>

    <div class="row">
        <div class="col-md-8">
            <h5 class="font-weight-bold">Terminal Jombor → Terminal Kartasura</h5>
            <p class="mb-3">Berangkat Pada : <span class="text-danger font-weight-bold">Rabu, 18 April 2025 - 21.00</span></p>

            <h6 class="text-center">Kode Booking</h6>
            <h4 class="text-center text-danger font-weight-bold mb-4">KTS250413HY25</h4>

            <div class="form-group">
                <label>Kode Pembayaran</label>
                <input type="text" class="form-control readonly-input" value="TFBK2025130410" readonly>
            </div>

            <div class="form-group">
                <label>Batas Pembayaran</label>
                <input type="text" class="form-control readonly-input" value="13 Apr 2025 10:10" readonly>
            </div>

            <hr>

            <h6 class="font-weight-bold">Data Penumpang</h6>
            <p><strong>Nama Pemesan</strong> <br><span class="text-danger">Bobby Krisnawan</span></p>
            <p><i class="fas fa-phone-alt text-danger mr-2"></i><span class="text-danger">089526648484</span></p>
            <p><i class="fas fa-chair text-danger mr-2"></i><span class="text-danger">12</span></p>
        </div>

        <div class="col-md-4">
            <h6 class="font-weight-bold">Detail Pembayaran</h6>
            <div class="border rounded p-3 bg-light">
                <div class="d-flex justify-content-between mb-1">
                    <span>Harga Tiket</span>
                    <span>Rp 230,000</span>
                </div>
                <div class="d-flex justify-content-between mb-1">
                    <span>Potongan Voucher</span>
                    <span>-Rp 0</span>
                </div>
                <div class="d-flex justify-content-between mb-1">
                    <span>Biaya Admin</span>
                    <span>-Rp 0</span>
                </div>
                <div class="d-flex justify-content-between mb-1">
                    <span>Biaya Asuransi</span>
                    <span>Rp 20,000</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span>Pajak</span>
                    <span>15%</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between font-weight-bold">
                    <span>Total Bayar</span>
                    <span>Rp 250,000</span>
                </div>
            </div>

            <hr class="my-4">

            <h6 class="font-weight-bold">Email Pemesan</h6>
            <p><i class="fas fa-envelope text-danger mr-2"></i><span class="text-danger">Bob.krisnawan@gmail.com</span></p>

            <h6 class="font-weight-bold">Waktu Pesan</h6>
            <p><i class="fas fa-clock text-danger mr-2"></i><span class="text-danger">13 April 2025 09:25</span></p>

            <h6 class="font-weight-bold">No Tiket</h6>
            <p><i class="fas fa-ticket-alt text-danger mr-2"></i><span class="text-danger">TRHY252004131019</span></p>
        </div>
    </div>
</div>
@endsection
