<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
    return view('hal-pesanan'); // nanti bisa tambahkan query ke database
    }
}
