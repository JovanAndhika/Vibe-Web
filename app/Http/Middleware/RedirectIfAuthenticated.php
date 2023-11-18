<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // jika sudah login tapi admin
                if (auth()->user()->is_admin == true) {
                    return redirect()->route('admin.index');
                }

                // jika sudah login tapi user
                if (auth()->user()->is_admin == false) {
                    return redirect()->route('user.index');
                }
                
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
