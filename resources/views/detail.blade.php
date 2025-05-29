@extends('layout')

@section('content')
<div style="max-width: 800px; margin: 30px auto; padding: 20px; background: linear-gradient(to right, #f57c00, #fbc02d); border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.2); color: #fff; font-family: 'Segoe UI', sans-serif;">
    <h3 style="margin-bottom: 10px; color: white;">DETAIL TIKET</h3>
    <div style="background: #fff; border-radius: 12px; padding: 20px; color: #f57c00; box-shadow: 2px 4px 8px rgba(0,0,0,0.1);">
        <div style="font-weight: bold; font-size: 18px; margin-bottom: 5px; color: #f57c00;">Kamis, 17 Maret 2025</div>
        <div style="font-weight: bold; font-size: 20px; margin-bottom: 15px;">PO HARYANTO</div>

        <div style="display: flex; justify-content: space-between;">
            <div>
                <p style="margin: 5px 0;"><strong>● Titik Naik</strong><br>Terminal Jombor</p>
                <p style="margin: 5px 0;"><strong>○ Titik Turun</strong><br>Terminal Kartasura</p>
            </div>
            <div style="text-align: right;">
                <p style="margin: 5px 0;"><strong>05.00</strong></p>
                <p style="margin: 5px 0; font-size: 12px;">Estimasi Perjalanan 1 Jam</p>
            </div>
        </div>

        <div style="margin-top: 10px; display: flex; flex-wrap: wrap; gap: 8px;">
            <span class="badge">Executive</span>
            <span class="badge">Aircon</span>
            <span class="badge">Snack</span>
            <span class="badge">Toilet</span>
            <span class="badge">Free Wifi</span>
        </div>
    </div>

    <div style="margin-top: 20px;">
        <p style="background: #fff; color: #f57c00; display: inline-block; padding: 6px 16px; border-radius: 16px; font-weight: bold;">Rute Perjalanan :</p>

        <div style="margin-top: 20px; text-align: center;">
            <div style="display: flex; justify-content: space-around; align-items: center;">
                <div>●<br><small>Terminal Jombor</small></div>
                <div>●<br><small>Terminal Delangu</small></div>
                <div>●<br><small>Terminal Panggung</small></div>
                <div>●<br><small>Terminal Kartasura</small></div>
            </div>
            <hr style="border: none; height: 4px; background: white; margin: 10px 0;">
        </div>

        <div style="text-align: right; font-weight: bold;">
            <span style="font-size: 18px;">Rp 247.000 - Rp. 275.000</span><br>
            <small style="font-weight: normal; color: #eee;">Tersedia 20 Kursi</small>
        </div>

        //Untuk button beli

        <div style="text-align: right; margin-top: 10px;">
            <a href="#" style="background: #d32f2f; color: #fff; padding: 10px 24px; border-radius: 20px; text-decoration: none; font-weight: bold;">Beli</a>
        </div>

        <a href="{{ route('pemesanan') }}">
            <button class="btn btn-danger">Beli</button>
        </a>

    </div>
</div>

<style>
    .badge {
        background: #fbc02d;
        color: #fff;
        padding: 5px 12px;
        border-radius: 20px;
        font-weight: bold;
        font-size: 12px;
    }
</style>
@endsection
