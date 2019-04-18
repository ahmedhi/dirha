<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function acceuil(){

        return view('mon-compte');

    }

    public function deconnexion(){
        auth()->logout();

        flash("Vous etes maintenant deconnecter")->message();

        return redirect('/connexion');
    }


    public function ChangePwd(){

        request()->validate([
            'password' => ['required','confirmed','min:8'],
            'password_confirmation' => ['required'],
        ]);

        auth()->user()->update([
            'mot_de_passe' => bcrypt(request('password')),
        ]);

        flash("Votre mot de passe à bien été modifier")->success();

        return redirect("/mon-compte");
    }

}
