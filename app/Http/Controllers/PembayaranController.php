<?php
use App\Models\Kursi;
use App\Models\Bus;
use App\Models\Rute;
use App\Models\User;

class PembayaranController extends Controller
{
    public function informasiPembayaran(Request $request)
    {
        dd(session()->all());
        // Ambil dari session 'data_pemesanan'
        $data = session('data_pemesanan') ?? [];

        if (!$data) {
            return redirect()->route('homeUser')->with('error', 'Data pemesan tidak ditemukan.');
        }

        $user = (object)[
            'nama'    => $data['nama']    ?? 'Guest',
            'no_telp' => $data['telepon'] ?? '-',
            'email'   => $data['email']   ?? '-',
        ];

        $kursi = $request->input('kursi'); // array of nomor kursi
        $harga = 100000;

        return view('informasi_pembayaran', [
            'user' => $user,
            'kursi' => $kursi,
            'harga' => $harga,
            'bus' => null,
            'rute' => null,
        ]);
    }
}



