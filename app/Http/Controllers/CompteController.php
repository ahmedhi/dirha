<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function acceuil(){

        return view('mon-compte');

    }

    public function infos(){
        return view('infosPersonnels');
    }

    public function formodif(){
        return view('modifInfos');
    }


    public function modif(){
        request() -> validate([
            'ancien_password'=> ['required','min:8'],
            'password' => ['required','confirmed','min:8'],
            'password_confirmation' => ['required'],
            'nom_complet' =>['required'],
            'num' => ['required'],
            'date' => ['required','date'],
            'poids' => ['required'],
            'taille' => ['required'],
        ]);
        $nameFile = $this->SavePicture();

        $user = user::where('id',auth()->user()->id );
        if($user->mot_de_passe == request('ancienPassword'));
        $user->mot_de_passe = bcrypt(request('password'));
        $user->nom = request('nom_complet');
        $user->img = $nameFile;
        $user->date_de_naissance = request('date') ;
        $user->tel = request('num') ;
        $user->taille = request('taille') ;
        $user->poids = request('poids') ;
        $user->saxe = request('sexe') ;
        $user->pays = request('payts');
        $user->save();

        return redirect('/mon-compte');
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
