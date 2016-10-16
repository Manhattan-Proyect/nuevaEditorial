<?php

namespace App\Http\Middleware;

use Closure;

use App\User;

use Illuminate\Support\Facades\Auth;

use App\Permiso;

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
        $usersCount = User::count();
        //dd(Auth::user()->permiso_id >= 2);
        if ($usersCount >= 1) {
            if (!Auth::guest() && Auth::user()->permiso_id < 2) {
            return $next($request);
        }
        }
        else{
            $permisos = Permiso::all();
            return view('auth.register',['permisos'=>$permisos]);
        }
        

    return redirect("/");

        
    }
}
