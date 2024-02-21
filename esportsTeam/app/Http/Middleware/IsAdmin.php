<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Si el usuario no está autenticado, redireccionar al inicio
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Si el usuario no tiene el rol "admin", redireccionar al inicio
        if (Auth::user()->rol !== 'admin') {
            return redirect()->route('index');
        }

        // Si el usuario tiene el rol "admin", continuar con la siguiente solicitud
        return $next($request);
    }
}
