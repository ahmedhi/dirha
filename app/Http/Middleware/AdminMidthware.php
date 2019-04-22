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
        if( !auth()->check()){
            flash("Vous devez etre connecter pour acceder à cette rubrique")->error();
            return redirect('connexion');
        }

        if( auth()->user()->type == -1 || auth()->user()->type == 0  ){
            flash("Erreur d'accès. Vous n'avez pas les conditions requis");
            return redirect('/');
        }

        return $next($request);
    }
}
