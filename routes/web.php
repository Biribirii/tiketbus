<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PembatalanController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Str;


Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@login');
Route::get('/homeAdmin', 'AuthController@homeAdmin')->middleware('auth.custom');
Route::get('/user', 'AuthController@homeUser')->middleware('auth.custom');
Route::get('/homePO', 'AuthController@homePO')->middleware ('auth.custom');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//HOME
Route::get('/homeUser', function () {
    return view('homeUser');
})->name('homeUser');
Route::get('/homeAdmin', function () {
    return view('homeAdmin');
});
// Dashboard (hanya untuk user yang login)
Route::get('/', function () {
    return 'Selamat datang di dashboard!';
})->middleware('auth');
Route::get('/search', function (\Illuminate\Http\Request $request) {
    return 'Hasil pencarian: ' . json_encode($request->all());
});

//-----------------------------------------------------------------------------------------------------------------------------------------

use App\Http\Controllers\RuteController;

Route::get('/halamanpo', [RuteController::class, 'index'])->name('halamanpo');
//Route::get('/detail-tiket/{id_rute}', [TicketController::class, 'detail'])->name('detail.tiket');

use App\Http\Controllers\TiketController;

Route::get('/detail-tiket/{id_rute}', [TiketController::class, 'detailtiket'])->name('detail.tiket');

use App\Http\Controllers\PemesananController;

Route::get('/pemesanan', function () {
    return view('pemesanan');
})->name('pemesanan.form');

Route::get('/pemesanan', [PemesananController::class, 'formPemesanan'])->name('pemesanan.form');
Route::post('/pemesanan/simpan', [PemesananController::class, 'simpanDataPemesan'])->name('pemesanan.simpan');
Route::post('/pemesanan/simpan', [PemesananController::class, 'simpan'])->name('pemesanan.simpan');
// Route::get('/pilih-kursi', function () {
//     return view('pilih-kursi');
// })->name('pilihKursi');

//Route::get('/pilih-kursi', [PemesananController::class, 'pilihKursi'])->name('pilihKursi');

use App\Http\Controllers\PilihKursiController;

//Route::post('/simpan-penumpang', [PilihKursiController::class, 'simpanDataPenumpang'])->name('simpan.penumpang');
Route::get('/pilih-kursi', [PilihKursiController::class, 'tampilkanKursi'])->name('pilihKursi');
Route::get('/pilih-kursi', [PilihKursiController::class, 'show'])->name('pilihKursi');


// Route::post('/pemesanan/simpan', [PemesananController::class, 'simpan'])->name('pemesanan.simpan');
// Route::get('/pilih-kursi', [PemesananController::class, 'pilihKursi'])->name('pilih.kursi');
// Route::get('/informasi-pembayaran', [PemesananController::class, 'informasiPembayaran'])->name('informasi.pembayaran');

use App\Http\Controllers\PembayaranController;

Route::get('/informasi-pembayaran', [PembayaranController::class, 'informasiPembayaran'])->name('informasi.pembayaran');



//Route::get('/pembayaran/{id_user}/{id_rute}/{id_bus}/{id_kursi}', [PembayaranController::class, 'informasiPembayaran'])->name('pembayaran.informasi');
//Route::get('/pembayaran/{id_user}/{id_bus}/{id_kursi}/{id_rute}', [PembayaranController::class, 'show'])->name('pembayaran.show');
//Route::get('/proses-pembayaran', [PembayaranController::class, 'proses'])->name('pembayaran.proses');
//Route::get('/informasi-pembayaran', [PembayaranController::class, 'informasiPembayaran'])->name('informasi.pembayaran');
//Route::get('/informasi-pembayaran', [PemesananController::class, 'informasiPembayaran'])->name('informasi.pembayaran');
//Route::get('/informasi-pembayaran', [PembayaranController::class, 'informasiPembayaran'])->name('informasi.pembayaran');
//Route::post('/pemesanan/simpan', [PemesananController::class, 'simpan'])->name('pemesanan.simpan');
//Route::get('/informasi-pembayaran', [PembayaranController::class, 'informasiPembayaran'])->name('informasi.pembayaran');
//Route::get('/pilih-kursi', [PemesananController::class, 'pilihKursi'])->name('pilih.kursi');

//Route::get('/informasi-pembayaran', [PemesananController::class, 'informasiPembayaran'])->name('pembayaran.informasi');

//Route::get('/informasi-pembayaran', [PembayaranController::class, 'informasi'])->name('informasi.pembayaran');
//admin : verifikasi pembayaran
Route::get('/verifikasi-pembayaran', function () {
    return view('verifikasi-pembayaran');
});

Route::get('/verifikasi-batal', function () {
    return view('verifikasi-batal');
});

//LOKASI BUS
Route::get('/lokasi-bus', function () {
    return view('lokasi_bus');
})->name('lokasi_bus');

Route::get('/detail-lokasi', function () {
    return view('detail_lokasi');
});


Route::get('/informasi-pembayaran', function () {
    return view('informasi_pembayaran');
});

Route::get('/tiket/{kode}', [TicketController::class, 'show'])->name('tiket.show');

//informasi pembayaran -> detail tiket
Route::get('/informasi-pembayaran', function () {
    return view('informasi_pembayaran', [
        'user' => auth()->user(),
        'bus' => (object)['nama_operator' => 'PO HARYANTO'],
        'rute' => (object)[
            'terminal_asal' => 'Terminal Jember',
            'terminal_tujuan' => 'Terminal Kartasura'
        ],
        'jadwal' => (object)[
            'tanggal' => '12 Jun 2025',
            'waktu' => '15.00 WIB'
        ],
        'kursi' => (object)['nomor' => request('kursi')],
        'harga' => 230000,
    ]);
})->name('informasi.pembayaran');


Route::get('/proses-pembayaran', function () {
    return redirect()->route('pesanan.dibuat');
})->name('pembayaran.proses');

//Pesanan-dibuat (Informasi Pembayaran Berhasil)
Route::get('/pesanan-dibuat', function () {
    return view('pesanan-dibuat', [
        'kode_booking' => 'KTS' . now()->format('ymd') . strtoupper(Str::random(2)),
        'kode_pembayaran' => 'TFBK' . now()->format('YmdHi'),
        'batas_pembayaran' => now()->addHour()->format('d M Y H:i'),
        'harga' => 230000,
    ]);
})->name('pesanan.dibuat');

Route::get('/tiket/detail', function () {
    return 'Halaman detail tiket (coming soon)...';
})->name('tiket.detail');

//detail-pesanan-tiket
Route::get('/detail-pesanan', function () {
    return view('detail-pesanan-tiket', [
        'kode_booking' => 'KTS250413HY25',
        'kode_pembayaran' => 'TFBK2025130410',
        'batas_pembayaran' => '13 Apr 2025 10:10',
        'nama' => 'Bobby Krisnawan',
        'telp' => '089526648484',
        'email' => 'Bob.krisnawan@gmail.com',
        'kursi' => '15',
    ]);
})->name('tiket.detail'); // <- tambahkan ini

//hal-pesanan
Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan');


//form-pembatalan
// Menampilkan halaman formulir pembatalan
Route::get('/form-pembatalan', [PembatalanController::class, 'form'])->name('pembatalan.form');

Route::post('/pembatalan/konfirmasi/{kode_booking}', [PembatalanController::class, 'konfirmasi'])->name('pembatalan.konfirmasi');

// Menangani konfirmasi pembatalan (POST)
Route::post('/pembatalan/{kode_booking}/konfirmasi', 'PembatalanController@konfirmasi')->name('pembatalan.konfirmasi');

// (Opsional) Route untuk kembali ke halaman pesanan
Route::get('/pesanan', 'PesananController@index')->name('pesanan');

// Tampilkan form perubahan jadwal
Route::get('/reschedule', 'RescheduleController@showForm')->name('reschedule.form');

// Proses konfirmasi perubahan jadwal (misalnya via POST)
Route::post('/reschedule/confirm', 'RescheduleController@confirm')->name('reschedule.confirm');

// Halaman hasil setelah konfirmasi
Route::get('/tiket/reschedule', function () {
    return view('tiket-reschedule');
})->name('tiket.reschedule');

//akun pengguna
Route::get('/akun', function () {
    return view('akun-pengguna');
})->name('akun.pengguna');

Route::get('/akun/detail', function () {
    return view('detail-akun');
})->name('akun.detail');

Route::get('/detail-akun', function () {
    return view('detail-akun');
});









