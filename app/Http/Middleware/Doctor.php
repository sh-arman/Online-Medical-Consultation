<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Doctor
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
        if(auth()->user()->is_doctor == 1){
            return $next($request);
        }
        return redirect()->back()->with('error',"Only doctor can access!");
    }
}
