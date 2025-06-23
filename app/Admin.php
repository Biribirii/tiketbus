<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'admin'; // Nama tabel sesuai ERD

    protected $primaryKey = 'id_admin';

    protected $fillable = ['email', 'password'];

    public $timestamps = false;
}
