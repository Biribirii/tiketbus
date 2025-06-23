@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card p-4 shadow-sm rounded">

        <!-- Profil Pengguna -->
        <div class="d-flex align-items-center mb-4">
            <div class="rounded-circle bg-light mr-3" style="width: 100px; height: 100px;"></div>
            <div>
                <h5 class="font-weight-bold mb-0">Mimi</h5>
                <a href="{{ route('akun.detail') }}" class="text-primary">
                    Edit Detail Akun <i class="fas fa-chevron-right small ml-1"></i>
                </a>
            </div>
        </div>

        <!-- Rewards -->
        <div class="mb-4">
            <h6 class="font-weight-bold">Rewards</h6>
            <div class="bg-light p-3 rounded">
                <span class="badge badge-secondary px-3 py-1 mb-2">Silver</span>
                <p class="mb-0">
                    Kamu sedang menuju ke tier <strong>Gold</strong>. Terus kumpulkan 10.000 poin untuk dapat naik level, ya. Semangat!
                </p>
                <div class="text-center mt-2">● ●</div>
            </div>
        </div>

        <!-- Riwayat Perjalanan -->
        <div class="mb-4">
            <h6 class="font-weight-bold">Riwayat Perjalanan</h6>

            <div class="border p-3 rounded mb-2 d-flex justify-content-between align-items-center">
                <div>
                    <strong class="text-danger">Terminal Jombor → Terminal Kartasura</strong><br>
                    <small>Senin, 14 April 2025 - 05.00</small>
                </div>
                <span class="badge badge-danger">New</span>
            </div>

            <div class="border p-3 rounded d-flex justify-content-between align-items-center">
                <div>
                    <strong class="text-dark">Yogyakarta → Denpasar</strong><br>
                    <small>Selasa, 2 Februari 2025 - 03.00</small>
                </div>
            </div>

            <div class="text-center mt-2">● ●</div>
        </div>

        <!-- Fitur Akun -->
        <div>
            <h6 class="font-weight-bold">Fitur Akun</h6>
            <ul class="list-unstyled">

                <li class="mb-3">
                    <i class="fas fa-users text-danger mr-2"></i>
                    <strong>Simpan Data Penumpang</strong><br>
                    <small>Simpan data keluarga dan temanmu sekarang supaya proses pemesanannya jadi lebih cepat dan simpel.</small>
                </li>

                <li class="mb-3">
                    <i class="fas fa-heart text-danger mr-2"></i>
                    <strong>Wishlist</strong><br>
                    <small>Simpan produk favoritmu biar gampang dilihat lagi.</small>
                </li>

                <li class="mb-3">
                    <i class="fas fa-language text-danger mr-2"></i>
                    <strong>Bahasa</strong><br>
                    <small>Pilih bahasa sesuai dengan pengertianmu.</small>
                </li>

                <li class="mb-3">
                    <i class="fas fa-map-marker-alt text-danger mr-2"></i>
                    <strong>Lokasi</strong><br>
                    <small>Hidupkan lokasimu agar kami dapat memberikan rekomendasi menarik.</small>
                </li>

                <li class="mt-4">
                    <a href="#" class="text-danger">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        <strong>Keluar</strong><br>
                        <small>Ini akan membantu kamu keluar dari akun TIXpress!</small>
                    </a>
                </li>

            </ul>
        </div>
        
    </div>
</div>
@endsection
