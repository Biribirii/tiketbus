<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckRole
{
    public function handle($request, Closure $next)
    {
        $role = Session::get('role');
        if (!$role) {
            return redirect()->route('login');
        }

        $path = $request->path();

        if ($path === 'admin' && $role !== 'admin') {
            return redirect()->route('login');
        }

        if ($path === 'user' && $role !== 'user') {
            return redirect()->route('login');
        }

         if ($path === 'adminpo' && $role !== 'adminpo') {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
