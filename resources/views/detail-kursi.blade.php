@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-r from-orange-500 to-yellow-400 p-6">
    <div class="flex justify-between items-center mb-4">
        <div class="text-white text-3xl font-bold">
            <span class="italic">TIXpress</span><sup class="text-sm">🚌</sup>
        </div>
        <div class="flex gap-4">
            <button class="bg-yellow-100 text-orange-600 font-semibold px-4 py-2 rounded-full shadow">Live Lokasi</button>
            <button class="bg-yellow-100 text-orange-600 font-semibold px-4 py-2 rounded-full shadow">Pesanan</button>
            <button class="bg-yellow-100 text-orange-600 font-semibold px-4 py-2 rounded-full shadow">👤 Bobby</button>
        </div>
    </div>

    <div class="bg-white rounded-xl p-6 flex shadow-lg">
        <div class="w-2/3 pr-6">
            <h2 class="text-2xl font-bold text-orange-600 mb-1">Jombor <span class="mx-2">→</span> Kartasura</h2>
            <p class="italic text-orange-400">Kamis, 17 Maret 2025,</p>
            <p class="text-orange-400 mb-4">05.00 - 06.00</p>

            <div class="flex items-center gap-4 mb-2">
                <div class="flex items-center gap-1"><div class="w-4 h-4 bg-gray-400"></div><span class="text-sm">Sudah di booking</span></div>
                <div class="flex items-center gap-1"><div class="w-4 h-4 bg-red-600"></div><span class="text-sm">Pilihan Anda</span></div>
                <div class="flex items-center gap-1"><div class="w-4 h-4 border"></div><span class="text-sm">Kosong</span></div>
            </div>

            <!-- Seat Layout -->
            <div class="bg-gray-100 inline-block p-4 rounded">
                <div class="text-center mb-2 font-semibold">Supir</div>
                <div class="grid grid-cols-5 gap-2">
                    @php
                        $booked = [8, 9, 10, 11, 14, 15, 17, 18, 20];
                        $selected = [15];
                    @endphp
                    @for ($i = 1; $i <= 24; $i++)
                        @if($i == 19)
                            <div class="col-span-5 text-center font-medium text-xs p-2 border border-gray-500 bg-white rounded">Toilet</div>
                        @else
                            <div class="w-10 h-10 flex items-center justify-center rounded 
                                {{ in_array($i, $selected) ? 'bg-red-600 text-white' : (in_array($i, $booked) ? 'bg-gray-400 text-white' : 'bg-white border') }}">
                                {{ $i }}
                            </div>
                        @endif
                    @endfor
                </div>
            </div>
            <p class="text-xs italic text-red-600 mt-2">Catatan: Kursi sewaktu dapat dipesan oleh pengguna lain yang terlebih dahulu menyelesaikan pembeliannya</p>
        </div>

        <div class="w-1/3 bg-red-600 text-white p-6 rounded-xl">
            <h3 class="text-lg font-bold mb-2">Detail Keberangkatan</h3>
            <p class="font-semibold">PO HARYANTO</p>
            <div class="mt-4">
                <p class="text-sm font-bold">🟠 Titik Naik</p>
                <p class="text-sm italic font-semibold">Terminal Jombor</p>
                <p class="text-xs leading-tight">Jl. Magelang, Jombor Lor, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta, 55285</p>

                <p class="text-sm font-bold mt-4">⚪ Titik Turun</p>
                <p class="text-sm italic font-semibold">Terminal Kartasura</p>
                <p class="text-xs leading-tight">Dusun I, Wirogunan, Kecamatan Kartasura, Kabupaten Sukoharjo, Jawa Tengah.</p>
            </div>

            <div class="border-t border-white mt-4 pt-4">
                <p class="text-sm font-semibold">Kursi No.</p>
                <p class="text-2xl font-bold">15</p>
                <p class="text-sm font-semibold mt-2">Harga</p>
                <p class="text-2xl font-bold">Rp 250.000</p>
            </div>

            <div class="flex justify-between mt-6">
                <button class="bg-gray-300 text-gray-700 font-bold px-4 py-2 rounded-full">Sebelumnya</button>
                <button class="bg-white text-red-600 font-bold px-4 py-2 rounded-full">Pembayaran</button>
            </div>
        </div>
    </div>
</div>
@endsection
