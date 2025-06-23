<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kursi extends Model
{
    protected $table = 'kursi';
    protected $primaryKey = 'id_kursi';
    public $timestamps = false;

    protected $fillable = [
        'id_bus',
        'nomor',
        'status',
    ];

    // Relasi ke Bus
    public function bus()
    {
        return $this->belongsTo(Bus::class, 'id_bus', 'id_bus');
    }

    // Relasi ke Tiket
    public function tiket()
    {
        return $this->hasMany(Tiket::class, 'id_kursi', 'id_kursi');
    }

    // Relasi ke Order
    public function order()
    {
        return $this->hasMany(Order::class, 'id_kursi', 'id_kursi');
    }

    
}
