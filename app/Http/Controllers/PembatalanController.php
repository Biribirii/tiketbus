<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembatalanController extends Controller
{
    public function form()
    {
        return view('form-pembatalan'); // pastikan view ini ada
    }

    public function konfirmasi(Request $request, $kode_booking)
    {
    // Logika untuk menyimpan/menandai pembatalan pesanan
    // Misalnya: update status pembatalan ke database

    return redirect('/pesanan')->with('berhasil_batal', 'Tiket dengan kode ' . $kode_booking . ' berhasil dibatalkan.');
    }

}
