<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // jika belum login
        if (!auth()->check())
        {
            return redirect()->route('login');
        }
        // jika sudah login tapi admin
        else if (auth()->user()->is_admin == true)
        {
            return redirect()->route('admin.index');
        }

        return $next($request);
    }
}
