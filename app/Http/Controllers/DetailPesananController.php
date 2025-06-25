<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\User;


class DetailPesananController extends Controller
{
    public function index(Request $request)
    {
        // Ambil data dari session atau parameter
        $dataPemesan = session('data_pemesanan');
        $kode_booking = 'KB' . strtoupper(Str::random(6));
        $kode_pembayaran = 'KP' . strtoupper(Str::random(6));

        // Batas waktu pembayaran (2 jam dari sekarang)
        $batas_pembayaran = '17 June 2025 ' . now()->addHours(1)->format('H:i');

        // Data user dari session
        $user = (object)[
            'nama' => session('data_pemesanan.nama') ?? '-',
            'no_telp' => session('data_pemesanan.telepon') ?? '-',
        ];

        return view('pesanan-dibuat', [
            'dataPemesan' => $dataPemesan,
            'kode_booking' => $kode_booking,
            'kode_pembayaran' => $kode_pembayaran,
            'batas_pembayaran' => $batas_pembayaran
        ]);
    }
}


