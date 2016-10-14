<?php

namespace App\Http\Middleware;

use Closure;

use App\User;

use Illuminate\Support\Facades\Auth;

class ValidateAdminUserSignUp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //$usersCount = User::count();
        //dd(Auth::user()->permiso_id >= 2);
        if (!Auth::guest() && Auth::user()->permiso_id < 2) {
            return $next($request);

        }

    return redirect("/");

        
    }
}
