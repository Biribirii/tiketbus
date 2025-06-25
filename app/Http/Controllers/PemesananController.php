<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kursi;
use App\Models\Bus;
use App\Models\Rute;
use App\Models\DataPemesan;

class PemesananController extends Controller
{
    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'telepon' => 'required|string|max:20',
            'email' => 'nullable|email|max:100',
        ]);

        // Simpan ke database
        $pemesan = DataPemesan::create([
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'email' => $request->email,
        ]);

        // Simpan juga ke session (untuk alur pemesanan lanjutan)
        session([
            'data_pemesanan' => $pemesan,
            'jumlah_penumpang' => $request->input('jumlah_penumpang') ?? 1, // default 1 jika tidak ada input
        ]);

        return redirect()->route('pilihKursi', ['bus_id' => $request->input('bus_id')]);
    }

    public function pilihKursi(Request $request)
    {
        $userId = $request->user_id;

        // Ambil user berdasarkan id
        $user = User::find($userId); // ganti 'Pengguna' jika model kamu lain
        return view('pilihKursi', [
            'user' => $user
        ]);
    }

    public function informasiPembayaran(Request $request)
    {
        dd($request->all());
        // Ambil nomor kursi sebagai array
        $nomorKursi = $request->input('kursi'); // ['11', '12']
        
        // Debug jika kosong
        // if (!$nomorKursi || !is_array($nomorKursi)) {
        //     dd('Nomor kursi kosong atau bukan array', $nomorKursi);
        // }

        // Paksa ke string agar match jika DB menyimpan sebagai VARCHAR
        $nomorKursi = array_map('strval', $nomorKursi);

        // Ambil data kursi
        $kursi = Kursi::whereIn('nomor', $nomorKursi)->get();

        // Debug: tampilkan hasil kursi
        if ($kursi->isEmpty()) {
            dd('Kursi tidak ditemukan di DB:', $nomorKursi);
        }

        $firstKursi = $kursi->first();
        $bus = $firstKursi ? Bus::find($firstKursi->id_bus) : null;
        $rute = $bus ? Rute::find($bus->id_rute) : null;

        $user = User::find($request->user_id);

        return view('informasi_pembayaran', [
            'kursi' => $kursi,
            'bus' => $bus,
            'rute' => $rute,
            'harga' => $rute->harga ?? 0,
            'user' => $user
        ]);
    }

    public function simpanDataPemesan(Request $request)
    {
        $data = $request->only(['nama', 'telepon', 'email']);
        session(['data_pemesanan' => $data]);

        session(['jumlah_penumpang' => 2]); // atau sesuai input
        return redirect()->route('pilih.kursi', ['bus_id' => $request->bus_id]);
    }

    public function formPemesanan(Request $request)
    {
        // Ambil ID rute dari query string
        $ruteId = $request->input('rute');

        // Ambil 1 bus dari rute tersebut
        $bus = Bus::where('id_rute', $ruteId)->first();

        if (!$bus) {
            return redirect()->route('homeUser')->with('error', 'Bus tidak ditemukan untuk rute tersebut.');
        }

        return view('pemesanan', compact('bus'));
    }

    public function halamanpo(Request $request)
    {
        // Validasi input dari form pencarian
        $request->validate([
            'asal' => 'required|string',
            'tujuan' => 'required|string',
            'tanggal' => 'required|date',
            'penumpang' => 'required|integer|min:1|max:6',
        ]);

        // Simpan jumlah penumpang ke session
        session(['jumlah_penumpang' => $request->input('penumpang')]);

        // Ambil daftar rute dari database (misalnya)
        $poList = Rute::where('asal', $request->asal)
                    ->where('tujuan', $request->tujuan)
                    ->whereDate('tanggal', $request->tanggal)
                    ->get();

        // Kirim data ke view
        return view('halamanpo', [
            'poList' => $poList
        ]);
    }

}