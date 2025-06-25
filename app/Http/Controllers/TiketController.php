<?php

namespace App\Http\Controllers;

use App\Models\Rute;
use App\Models\Bus;
use App\Models\Kursi;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function detailtiket($id_rute)
    {
        $rute = Rute::findOrFail($id_rute);
        $bus = Bus::where('id_rute', $id_rute)->first();

        $jumlahKursi = Kursi::where('id_bus', $bus->id_bus)
                            ->where('status', 'tersedia')
                            ->count();

        return view('detail', [
            'rute' => $rute,
            'bus' => $bus,
            'jumlah_kursi' => $jumlahKursi,
        ]);
        
    }
    public function show()
        {
            return view('detail-pesanan-tiket'); // Pastikan view ini ada di resources/views/detail_tiket.blade.php
        }
}
