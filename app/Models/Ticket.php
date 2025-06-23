<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tiket'; // nama tabel di database

    protected $fillable = [
        'kode_booking',
        'kode_pembayaran',
        'nama_pemesan',
        'email',
        'no_telp',
        'no_kursi',
        'waktu_pesan',
        'harga_tiket',
        'biaya_asuransi',
        'pajak',
    ];

    protected $dates = ['waktu_pesan'];
}