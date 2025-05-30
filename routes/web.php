<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\PemesananController;


Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout')->name('logout');


// Dashboard (hanya untuk user yang login)
Route::get('/', function () {
    return 'Selamat datang di dashboard!';
})->middleware('auth');

//sementara untuk cek keberhasilan dan kesesuaian tampilan

// Halaman Registrasi (menuju login saat tombol ditekan)
Route::get('/registrasi', function () {
    return view('registrasi');
})->name('registrasi');


Route::get('/home', function () {
    return view('home');
});

Route::get('/search', function (\Illuminate\Http\Request $request) {
    return 'Hasil pencarian: ' . json_encode($request->all());
});

// sementara berhasil /login, /home, /halamanpo, /detailtiket

use Illuminate\Support\Facades\Route;

// Halaman PO (Jadwal)
Route::get('/halamanpo', function () {
    $poList = [
        [
            'nama' => 'PO HARYANTO',
            'kelas' => 'Executive',
            'naik' => 'Terminal Jember',
            'jam' => '05.00',
            'turun' => 'Terminal Kartasura',
            'harga_min' => 247000,
            'harga_max' => 275000,
        ],
        [
            'nama' => 'PO MAHENDRA',
            'kelas' => 'Executive',
            'naik' => 'Terminal Jember',
            'jam' => '10.00',
            'turun' => 'Terminal Kartasura',
            'harga_min' => 247000,
            'harga_max' => 275000,
        ],
        // Tambah PO lain sesuai kebutuhan
    ];
    return view('halamanpo', compact('poList'));
})->name('tiket.po');

// Detail tiket
Route::get('/tiket/detail', function (\Illuminate\Http\Request $request) {
    $po = $request->input('po', 'PO HARYANTO');
    return view('detail', compact('po'));
})->name('tiket.detail');

//Data Pemesanan
Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
Route::post('/pemesanan', [PemesananController::class, 'store'])->name('pemesanan.store');

//Pilih Kursi
Route::get('/pilih-kursi', function () {
    return view('pilih-kursi'); // Buat view ini nantinya
})->name('kursi.pilih');



