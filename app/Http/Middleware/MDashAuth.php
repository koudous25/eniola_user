<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MDashAuth
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
        if (
            session()->has('user') && (
                ((session()->get('user'))['userOut'])['role'] == "RESPONSABLE" ||
                ((session()->get('user'))['userOut'])['role'] == "ORGANISATION")
        ) {
        } else {
            return redirect()->route('app_home');
        }
        return $next($request);
    }
}
