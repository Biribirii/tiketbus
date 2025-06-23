<?php
use App\Kursi;
use App\Bus;
use App\Rute;
use App\User;

public function informasiPembayaran(Request $request)
{
    $kursiData = json_decode($request->kursi, true); // array dari JSON
    $nomor_kursi = is_array($kursiData) ? $kursiData[0] : $kursiData;

    $kursi = Kursi::where('nomor', $nomor_kursi)->first();

    if (!$kursi) {
        return back()->with('error', 'Kursi tidak ditemukan.');
    }

    $bus = Bus::find($kursi->id_bus);
    $rute = $bus ? Rute::find($bus->id_rute) : null;
    $user = $request->user_id ? User::find($request->user_id) : null;

    return view('informasi_pembayaran', [
        'kursi' => $kursi,
        'bus' => $bus,
        'rute' => $rute,
        'harga' => optional($rute)->harga ?? 0,
        'user' => $user,
    ]);
}
