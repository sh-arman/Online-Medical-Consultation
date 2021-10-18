<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class doctor
{
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);
        if(Auth::check() && Auth::user()->is_doctor == 1){
            return $next($request);
        }
        return redirect('home')->with('error',"You don't have access.");
    }
}
