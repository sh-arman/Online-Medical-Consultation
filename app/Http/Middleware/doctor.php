<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class doctor
{
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);
        if(auth()->user()->is_doctor == 1){
            return $next($request);
        }
        return redirect('home')->with('error',"You don't have access.");
    }
}
