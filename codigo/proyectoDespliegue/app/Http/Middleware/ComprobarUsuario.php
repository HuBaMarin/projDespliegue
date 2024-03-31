<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComprobarUsuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /*allow access to sesiones if user is from table trabajadores*/

        if ($request->user() && $request->user()->rol == 'trabajador') {
            return redirect()->route('sesiones');
        }

        return $next($request);
    }
}
