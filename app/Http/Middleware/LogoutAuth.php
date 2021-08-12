<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogoutAuth
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
        if ($request->path() == 'logout' && session()->has('user')) {
        } else {
            return redirect()->route('app_home');
        }
        return $next($request);
    }
}
