<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    protected $table = 'rute'; // pastikan lowercase, sesuai DB
    protected $primaryKey = 'id_rute';

    protected $fillable = [
        'asal', 'tujuan', 'tanggal', 'harga'
    ];

    public $timestamps = false; // karena tabel tidak ada kolom created_at & updated_at
}
