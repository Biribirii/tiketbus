<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPemesan extends Model
{
    protected $table = 'data_pemesan';

    protected $fillable = [
        'nama',
        'telepon',
        'email',
    ];
}