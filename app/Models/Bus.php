<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table = 'Bus'; // ⬅️ sesuaikan dengan nama tabel di database (case-sensitive di sebagian server)

    protected $primaryKey = 'id_bus'; // opsional, jika kamu tidak pakai 'id' sebagai primary key
    public $timestamps = false; // jika tabel kamu tidak punya kolom 'created_at' dan 'updated_at'

    public function rute()
    {
        return $this->belongsTo(Rute::class, 'id_rute', 'id_rute');
    }

}
