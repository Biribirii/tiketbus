<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RescheduleController extends Controller
{
    public function showForm()
    {
        // Data dummy untuk tampilan awal
        $data = [
            'nama' => 'Bobby Krisnawan',
            'tanggal' => '18 / 04 / 2025',
            'waktu' => '21 : 00',
            'armada' => 'PO Haryanto',
            'kursi' => '15',
        ];

        return view('form-reschedule', $data);
    }

    public function confirm(Request $request)
    {
        // Proses data yang dikirim dari form
        // Validasi jika perlu

        // Simpan logika konfirmasi di sini
        // Untuk sementara, redirect kembali dengan pesan sukses

        return redirect()->route('reschedule.form')->with('status', 'Jadwal berhasil dikonfirmasi.');
    }
}
