<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class SuperAdmin
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
        if (Auth::check() && Auth::user()->roleId == 'SuperAdmin') {
            return $next($request);
        }
        else (Auth::check() && Auth::user()->roleId == 'Admin') {
            return redirect('/admin');
        }
        
    }
}
