<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuteBus extends Model
{
    use HasFactory;

    protected $table = 'rute_bus'; // nama tabel
    protected $primaryKey = 'id_rute';

    protected $fillable = [
        'asal',
        'tanggal',
        'tujuan',
        'harga'
    ];
}
