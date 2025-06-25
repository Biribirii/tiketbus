<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataRute;

class DataRuteController extends Controller
{
    // Menampilkan semua data rute
    public function index()
    {
        $rute = DataRute::all();
        return view('rute.index', compact('rute'));
    }

    // Menampilkan form tambah rute
    public function create()
    {
        return view('rute.create');
    }

    // Menyimpan rute baru
    public function store(Request $request)
    {
        $request->validate([
            'asal' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'tujuan' => 'required|string|max:100',
            'harga' => 'required|integer',
        ]);

        DataRute::create($request->all());

        return redirect()->route('rute.index')->with('success', 'Rute berhasil ditambahkan.');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $rute = DataRata::findOrFail($id);
        return view('rute.edit', compact('rute'));
    }

    // Menyimpan perubahan
    public function update(Request $request, $id)
    {
        $request->validate([
            'asal' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'tujuan' => 'required|string|max:100',
            'harga' => 'required|integer',
        ]);

        $rute = DataRute::findOrFail($id);
        $rute->update($request->all());

        return redirect()->route('rute.index')->with('success', 'Rute berhasil diperbarui.');
    }

    // Menghapus data rute
    public function destroy($id)
    {
        $rute = DataRute::findOrFail($id);
        $rute->delete();

        return redirect()->route('rute.index')->with('success', 'Rute berhasil dihapus.');
    }
}