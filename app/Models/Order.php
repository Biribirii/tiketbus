<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class, 'id_bus');
    }

    public function kursi()
    {
        return $this->belongsTo(Kursi::class, 'id_kursi');
    }

    public function rute()
    {
        return $this->belongsTo(Rute::class, 'id_rute');
    }

}
