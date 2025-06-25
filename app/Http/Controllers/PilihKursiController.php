<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Kursi;

class PilihKursiController extends Controller
{
    public function tampilkanKursi(Request $request)
    {
        // Validasi session
        if (!session()->has('jumlah_penumpang')) {
            return redirect()->route('homeUser')->with('error', 'Silakan pilih jumlah penumpang terlebih dahulu.');
        }

        $jumlahPenumpang = session('jumlah_penumpang');

        // Contoh pengambilan data kursi dari sebuah bus
        $busId = $request->bus_id; // Anda perlu sesuaikan ini dari flow sebelumnya
        $kursi = Kursi::where('id_bus', $busId)->get();

        return view('informasi_pembayaran', [
            $jumlahPenumpang => $jumlahPenumpang,
            $user => (object)[
                'nama' => session('nama'),
                'no_telp' => session('telepon'),
                'email' => session('email')
                //'id_user' => session('user_id') ?? null // tambahkan jika memang punya user_id
            ],
            $kursiList => $kursi // jika ingin looping dari DB
        ]);
    }

    public function show(Request $request)
    {
        if (!session()->has('nama') || !session()->has('jumlah_penumpang')) {
            return redirect()->route('homeUser')->with('error', 'Silakan isi data pemesan terlebih dahulu.');
        }

        $user = (object)[
            'nama' => session('nama'),
            'no_telp' => session('telepon'),
            'email' => session('email'),
            //'id_user' => session('user_id') ?? null // tambahkan jika memang punya user_id
        ];

        $jumlahPenumpang = session('jumlah_penumpang');
        $busId = $request->input('bus_id');

        if (!$jumlahPenumpang || !$busId) {
            return redirect()->route('homeUser')->with('error', 'Data tidak lengkap. Silakan mulai dari awal.');
        }

        $kursiList = Kursi::where('id_bus', $busId)->get();

        return view('pilihKursi', compact('user', 'jumlahPenumpang', 'kursiList', 'busId'));
    }

}
