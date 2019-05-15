<?php

namespace App\Http\Middleware;

use Closure;

class AdminMidthware
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
        if( !auth()->check() || (auth()->user()->type != -1 &&  auth()->user()->type != 0)){
            return redirect('/');
        }

        return $next($request);
    }
}
