<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
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
        if ($request->path() == 'login' && session()->has('user')) {
            $user = session()->get('user');
            $userOut = $user['userOut'];
            if ($userOut['role'] === "ETUDIANT") {
                return redirect()->route('app_dash_student');
            } elseif ($userOut['role'] === "RESPONSABLE") {
                return redirect()->route('app_dash_student');
            } elseif ($userOut['role'] === "ORGANISATION") {
                return redirect()->route('app_dash_student');
            } elseif ($userOut['role'] === "ADMIN") {
                return redirect()->route('app_dash_student');
            }
        }
        return $next($request);
    }
}
