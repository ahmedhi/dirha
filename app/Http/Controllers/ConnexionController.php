<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function form(){
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
            return redirect('/');
        }
        else return back()->withInput()->withErrors([
            'email' => 'votre email est incorrect',
            'password' => 'votre mot de passe est invalide',
        ]);

    }


}
