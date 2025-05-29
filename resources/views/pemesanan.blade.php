@extends('layout')

@section('content')
<div style="max-width: 800px; margin: 30px auto; padding: 20px; background: linear-gradient(to right, #f57c00, #fbc02d); border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.2); color: #fff; font-family: 'Segoe UI', sans-serif;">
    <h3 style="margin-bottom: 20px; color: white;">DATA PEMESAN</h3>

    <form action="{{ route('pemesanan.store') }}" method="POST">
        @csrf
        <div style="margin-bottom: 15px;">
            <input type="text" name="nama" placeholder="Nama Pemesan" required
                style="width: 100%; padding: 15px; border-radius: 10px; border: none; font-size: 16px; box-shadow: 2px 2px 6px rgba(0,0,0,0.1);">
        </div>

        <div style="margin-bottom: 15px;">
            <input type="text" name="telepon" placeholder="Nomor Telepon" required
                style="width: 100%; padding: 15px; border-radius: 10px; border: none; font-size: 16px; box-shadow: 2px 2px 6px rgba(0,0,0,0.1);">
        </div>

        <div style="margin-bottom: 15px;">
            <input type="email" name="email" placeholder="Email Pemesan" required
                style="width: 100%; padding: 15px; border-radius: 10px; border: none; font-size: 16px; box-shadow: 2px 2px 6px rgba(0,0,0,0.1);">
        </div>

        <div style="margin-bottom: 25px;">
            <label style="display: flex; align-items: center;">
                <input type="checkbox" name="penumpang_sama" style="margin-right: 10px;">
                Pemesan adalah penumpang
            </label>
        </div>

        <div style="text-align: right;">
            <button type="submit" style="background: #d32f2f; color: white; padding: 12px 28px; border: none; border-radius: 25px; font-size: 16px; font-weight: bold; cursor: pointer;">
                Pilih Kursi
            </button>
        </div>
    </form>
</div>
@endsection
