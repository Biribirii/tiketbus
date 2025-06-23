<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kursi;
use App\Models\Bus;
use App\Models\Rute;

class PemesananController extends Controller
{
    public function simpan(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'telepon' => 'required|string',
        ]);

        $user = new User();
        $user->nama = $validated['nama'];
        $user->no_telp = $validated['telepon'];
        $user->password = bcrypt('default123');
        $user->diskon = 0;
        $user->save();

        return redirect()->route('pilih.kursi', ['user_id' => $user->id_user]);
    }

    public function pilihKursi(Request $request)
    {
        $userId = $request->user_id;

        // Ambil user berdasarkan id
        $user = User::find($userId); // ganti 'Pengguna' jika model kamu lain
        return view('pilih-kursi', [
            'user' => $user
        ]);
    }

    public function informasiPembayaran(Request $request)
    {
        $kursi = Kursi::where('nomor', $request->kursi)->first();
        $bus = $kursi ? Bus::find($kursi->id_bus) : null;
        $rute = $bus ? Rute::find($bus->id_rute) : null;
        $user = Pengguna::find($request->user_id);

        return view('informasi_pembayaran', [
            'kursi' => $kursi,
            'bus' => $bus,
            'rute' => $rute,
            'harga' => $rute->harga ?? 0,
            'user' => $user
        ]);
    }


}