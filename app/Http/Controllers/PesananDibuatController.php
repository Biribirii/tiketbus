<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;

class PesananDibuatController extends Controller
{
    public function pesananDibuat()
    {
        // Ambil harga dari session atau default 100000
        $harga = session('harga') ?? 100000;

        // Hitung komponen biaya
        $pajak = $harga * 0.15;
        $asuransi = 20000;
        $total = $harga + $pajak + $asuransi;

        // Generate kode booking dan pembayaran (contoh acak)
        $kode_booking = 'KB' . strtoupper(Str::random(6));
        $kode_pembayaran = 'KP' . strtoupper(Str::random(6));

        // Batas waktu pembayaran (2 jam dari sekarang)
        $batas_pembayaran = '17 June 2025 ' . now()->addHours(1)->format('H:i');

        return view('pesanan-dibuat', [
            'harga' => $harga,
            'pajak' => $pajak,
            'asuransi' => $asuransi,
            'total' => $total,
            'kode_booking' => $kode_booking,
            'kode_pembayaran' => $kode_pembayaran,
            'batas_pembayaran' => $batas_pembayaran
        ]);
    }
}
