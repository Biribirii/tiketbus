<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBus extends Model
{
    use HasFactory;

    protected $table = 'data_bus';
    protected $primaryKey = 'id_bus';

    protected $fillable = [
        'id_rute',
        'nama_bus',
        'kelas',
        'kapasitas'
    ];

    public function rute()
    {
        return $this->belongsTo(Rute::class, 'id_rute', 'id_rute');
    }
}


