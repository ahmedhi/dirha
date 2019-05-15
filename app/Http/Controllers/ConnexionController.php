<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function form(){
        if( auth()->check())
            return redirect('/');
        return view('connexion');
    }

    public function traitement(){

        request() -> validate([
            'email' => ['required' , 'email'],
            'password' => ['required'],
        ]);

        $connect = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if($connect){
            flash("La connexion a bien été effectuer")->success();
            if( auth()->user()->type === 0 || auth()->user()->type === -1 )
                return redirect('/config');
            return redirect('/');
        }
        else return back()->withInput()->withErrors([
            'email' => 'votre email est incorrect',
            'password' => 'votre mot de passe est invalide',
        ]);

    }


}
