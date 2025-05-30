<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        return view('pemesanan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'    => 'required|string|max:100',
            'telepon' => 'required|string|max:15',
            'email'   => 'required|email|max:100',
            'is_penumpang' => 'nullable|boolean'
        ]);

        // Simpan data atau lanjut ke pemilihan kursi
        // Pemesanan::create([...]);

        return redirect()->route('kursi.pilih')->with('success', 'Data pemesan berhasil disimpan.');
    }
}
