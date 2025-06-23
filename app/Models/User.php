<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user'; // nama tabel sesuai database
    protected $primaryKey = 'id_user';
    protected $fillable = ['nama', 'no_telp', 'email', 'password', 'diskon'];
    public $timestamps = false;
}
