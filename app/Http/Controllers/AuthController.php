<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin;
use App\Models\AdminPO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Cek hardcoded username dan password
        if ($username === 'admin' && $password === 'admin') {
            Session::put('username', $username);
            Session::put('role', 'admin');
            return redirect('/homeAdmin');
        } elseif ($username === 'mimi' && $password === 'mimi') {
            Session::put('username', $username);
            Session::put('role', 'home');
            return redirect('/homeUser');
        } elseif ($username === 'adminpo' && $password === 'adminpo') {
            Session::put('username', $username);
            Session::put('role', 'adminpo');
            return redirect('/homeAdminPO');
        } else {
            return redirect('/login')->withErrors(['login' => 'Username atau password salah']);
        }
    }

    public function admin()
    {
        return view('homeAdmin');
    }

    public function home()
    {
        return view('homeUser');
    }

    public function adminpo()
    {
        return view('homeAdminPO');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }
}
