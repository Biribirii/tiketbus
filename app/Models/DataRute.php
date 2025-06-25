<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataRute extends Model
{
    use HasFactory;

    protected $table = 'data_rute'; // Sesuai dengan nama tabel di database

    protected $primaryKey = 'id_rute'; // Kolom primary key

    public $incrementing = true;

    protected $fillable = [
        'asal',
        'tanggal',
        'tujuan',
        'harga',
    ];
}


