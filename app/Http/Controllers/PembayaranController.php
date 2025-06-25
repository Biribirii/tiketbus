<?php

namespace App\Http\Controllers;

use App\Models\Kursi;
use App\Models\Bus;
use App\Models\Rute;
use App\Models\User;
use Illuminate\Http\Request;



class PembayaranController extends Controller
{
    public function informasiPembayaran(Request $request)
    {
        $dataPemesan = session('data_pemesanan');

        if (!$dataPemesan) {
            return redirect()->route('homeUser')->with('error', 'Data pemesan tidak ditemukan.');
        }

        $nomorKursi = $request->input('kursi');
        $nomorKursi = array_map('strval', $nomorKursi);

        $kursi = Kursi::with('bus.rute')->whereIn('nomor', $nomorKursi)->get();

        $firstKursi = $kursi->first();
        $bus = $firstKursi ? $firstKursi->bus : null;
        $rute = $bus ? $bus->rute : null;

        $harga = $rute ? $rute->harga : 0;

        return view('informasi_pembayaran', [
            'dataPemesan' => $dataPemesan,
            'kursi' => $kursi,
            'harga' => $harga,
            'bus' => $bus,
            'rute' => $rute,
        ]);
    }
}
