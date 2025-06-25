@extends('layout')

@section('content')
<div style="max-width: 800px; margin: 30px auto; padding: 20px; background: linear-gradient(to right, #f57c00, #fbc02d); border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.2); color: #fff; font-family: 'Segoe UI', sans-serif;">
  <h3 style="margin-bottom: 20px; color: white;"><strong>DATA PEMESAN</strong></h3>

  <form action="{{ route('pemesanan.simpan') }}" method="POST">
    @csrf
    <input type="hidden" name="jumlah_penumpang" value="{{ session('jumlah_penumpang') }}">
    <input type="hidden" name="bus_id" value="{{ $bus->id_bus }}">

    <!-- Nama -->
    <div style="margin-bottom: 15px;">
      <label for="nama" style="display: block; margin-bottom: 5px; font-weight: bold; color: white;">
        Nama Pemesan
      </label>
      <input type="text" name="nama" placeholder="Nama Pemesan" required
        style="width: 90%; padding: 15px; border-radius: 10px; border: none; font-size: 16px;
               box-shadow: 2px 2px 6px rgba(0,0,0,0.1); color: black;">
    </div>

    <!-- Telepon -->
    <div style="margin-bottom: 15px;">
      <label for="telepon" style="display: block; margin-bottom: 5px; font-weight: bold; color: white;">
        Nomor Telepon
      </label>
      <input type="text" name="telepon" placeholder="Nomor Telepon" required
        style="width: 90%; padding: 15px; border-radius: 10px; border: none; font-size: 16px;
               box-shadow: 2px 2px 6px rgba(0,0,0,0.1); color: black;">
    </div>

    <!-- Email -->
    <div style="margin-bottom: 25px;">
      <label for="email" style="display: block; margin-bottom: 5px; font-weight: bold; color: white;">
        Email Pemesan
      </label>
      <input type="email" name="email" placeholder="Email Pemesan" required
        style="width: 90%; padding: 15px; border-radius: 10px; border: none; font-size: 16px;
               box-shadow: 2px 2px 6px rgba(0,0,0,0.1); color: black;">
    </div>

    <!-- Tombol Aksi -->
    <div style="display: flex; justify-content: space-between; align-items: center;">
      <!-- Tombol Kembali -->
      <a href="{{ route('halamanpo') }}" style="background: #d32f2f; color: white; padding: 12px 28px; border: none; border-radius: 25px; font-size: 16px; font-weight: bold; text-decoration: none; transition: background 0.3s;">
        Kembali
      </a>

      <!-- Tombol Submit -->
      <button type="submit" style="background: #d32f2f; color: white; padding: 12px 28px; border: none; border-radius: 25px; font-size: 16px; font-weight: bold; cursor: pointer;">
        Pilih Kursi
      </button>
    </div>
  </form>