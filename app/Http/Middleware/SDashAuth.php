<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SDashAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('user') && ((session()->get('user'))['userOut'])['role'] == "ETUDIANT") {
        } else {
            return redirect()->route('app_home');
        }
        return $next($request);
    }
}
