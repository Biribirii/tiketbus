<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rute;
class RuteController extends Controller
{
    public function index(Request $request)
    {
        // Ambil data filter dari request
        $asal = $request->input('asal');
        $tujuan = $request->input('tujuan');
        $tanggal = $request->input('tanggal');

        // Query berdasarkan filter
        $query = Rute::query();

        if ($asal) {
            $query->where('asal', $asal);
        }

        if ($tujuan) {
            $query->where('tujuan', $tujuan);
        }

        if ($tanggal) {
            $query->whereDate('tanggal', $tanggal);
        }

        // Urutkan berdasarkan tanggal terdekat
        $poList = $query->orderBy('tanggal', 'asc')->get();

        return view('halamanpo', compact('poList'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'keberangkatan' => 'required|string',
            'tujuan' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        Rute::create([
            'asal' => $request->keberangkatan,
            'tujuan' => $request->tujuan,
            'tanggal' => $request->tanggal,
            'harga' => 250.000, // bisa nanti diganti logika dinamis
        ]);

        return redirect()->route('halamanpo')->with('success', 'Data rute berhasil disimpan.');
    }
}
