@extends('layouts.app')

@section('content')
<div class="container py-4" style="background: linear-gradient(to bottom, #ffe259, #ffa751); border-radius: 15px; max-width: 800px; margin: auto;">
    <div class="bg-white p-4 rounded shadow">
        <h5 class="text-danger font-weight-bold mb-4"><i class="fa fa-check-circle text-success"></i> Pesanan Dibuat!</h5>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="font-weight-bold">Kode Booking</label>
                <input type="text" class="form-control" value="{{ $kode_booking ?? 'KTS250413HY25' }}" readonly>

                <label class="font-weight-bold mt-3">Kode Pembayaran</label>
                <input type="text" class="form-control" value="{{ $kode_pembayaran ?? 'TFBK2025130410' }}" readonly>

                <label class="font-weight-bold mt-3">Batas Pembayaran</label>
                <input type="text" class="form-control" value="{{ $batas_pembayaran ?? '13 Apr 2025 10:10' }}" readonly>

                <small class="text-muted mt-2 d-block">Untuk melihat riwayat transaksi, Anda bisa cek melalui Aplikasi ataupun Website</small>
            </div>

            <div class="col-md-6">
                <h6 class="font-weight-bold">Detail Pembayaran</h6>
                <table class="table table-borderless">
                    <tr>
                        <td>Harga Tiket</td>
                        <td class="text-right">Rp {{ number_format($harga ?? 230000, 0, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td>Potongan Voucher</td>
                        <td class="text-right">-Rp 0</td>
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
                        <td>Pajak</td>
                        <td class="text-right">15%</td>
                    </tr>
                    <tr>
                        <th>Total Bayar</th>
                        <th class="text-right">Rp {{ number_format($harga + 20000 ?? 250000, 0, ',', '.') }}</th>
                    </tr>
                </table>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-4">
            <div class="text-muted">Terimakasih Telah Menggunakan TIXpress!</div>
            <a href="{{ route('tiket.detail') }}" class="btn btn-danger">Detail Tiket >></a>

        </div>
    </div>
</div>
@endsection
