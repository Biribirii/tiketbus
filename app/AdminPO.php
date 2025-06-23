<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminPO extends Model
{
    protected $table = 'admin_po'; // Nama tabel sesuai ERD

    protected $primaryKey = 'id_admin_po';

    protected $fillable = ['email',  'password', 'perusahaan'];

    public $timestamps = false;
}
