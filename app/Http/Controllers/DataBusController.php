<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBus;

class DataBusController extends Controller
{
    public function index()
    {
        $dataBus = DataBus::all();
        return view('data_bus.index', compact('dataBus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_rute' => 'nullable|exists:rute,id_rute',
            'nama_bus' => 'required|string|max:20',
            'kelas' => 'required|string|max:50',
            'kapasitas' => 'required|integer',
        ]);

        DataBus::create($request->all());

        return redirect()->back()->with('success', 'Data bus berhasil disimpan.');
    }
}
