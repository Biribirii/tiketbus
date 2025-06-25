<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RuteBus;

class RuteBusController extends Controller
{
    public function index()
    {
        $rute = RuteBus::all();
        return view('rute.index', compact('rute'));
    }

    public function create()
    {
        return view('rute.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'asal' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'tujuan' => 'required|string|max:100',
            'harga' => 'required|numeric',
        ]);

        RuteBus::create($request->all());

        return redirect()->route('rute.index')->with('success', 'Data rute berhasil disimpan.');
    }
}
