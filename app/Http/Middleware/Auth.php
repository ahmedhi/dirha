<?php

namespace App\Http\Middleware;

use Closure;

class Auth
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
        if( !auth()->check()){
            flash("Vous devez etre connecter pour acceder à cette rubrique")->error();
            return redirect('connexion');
        }

        return $next($request);
    }
}
