<?php

namespace App\Http\Controllers;

use App\partenaires;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class InscriptionController extends Controller
{
    public function form(){

        return view('inscriptionChoix');
    }

    public function Partenaire(){
        return view('inscriptionPartenaire');
    }

    public function Utilisateur(){
        return view('inscriptionUtilisateur');
    }

    public function Admin(){
        $admins = user::where('type',0)->get();
        return view('AddAdmin',[
            'users' => $admins,
        ]);
    }

    public function SU(){
        return view('InscriptionSU');
    }

    public function SavePicture(){
        // Save the profil picture
        if( Input::file('image')){
        $file = Input::file('image');
        $file->move('UserImage', $file->getClientOriginalName()); //l'image sera enregistrer dans public/UserImage
        return $file->getClientOriginalName() ;
        }
        else {
            return "profile-icon-png-898.png";
        }
    }

    public function AddUser(){
        request() -> validate([
            'email' => ['required','email'],
            'password' => ['required','confirmed','min:8'],
            'password_confirmation' => ['required'],
            'nom_complet' =>['required'],
            'num' => ['required'],
            'date' => ['required','date'],
            'poids' => ['required'],
            'taille' => ['required'],
            'pays' => ['required'],
            'sexe' => ['required'],
        ]);

        $nameFile = $this->SavePicture();

        // Creation du nouveau profil dans la table users
        $user = user::create([
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),
            'nom' => request('nom_complet'),
            'img' => $nameFile,
            'tel' => request('num'),
            'date_de_naissance' => request('date'),
            'poids' => request('poids'),
            'taille' => request('taille'),
            'sexe' => request('sexe'),
            'pays' => request('pays'),
            'type' => 1, // =1 pour utilisateur normal
        ]);


        return redirect('/connexion');

    }

    public function AddPart(){
        request() -> validate([
            'email' => ['required','email'],
            'password' => ['required','confirmed','min:8'],
            'password_confirmation' => ['required'],
            'nom_complet' =>['required'],
            'num' => ['required'],
            'date' => ['required','date'],
            'poids' => ['required'],
            'taille' => ['required'],
            'fix' => ['required'],
            'diplome' => ['required'],
            'metier' => ['required'],
            'experience' => ['required'],
            'sexe' => ['required'],
        ]);

        $nameFile = $this->SavePicture();

        // Creation du nouveau profil dans la table users
        $user = user::create([
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),
            'nom' => request('nom_complet'),
            'img' => $nameFile,
            'tel' => request('num'),
            'date_de_naissance' => request('date'),
            'poids' => request('poids'),
            'taille' => request('taille'),
            'sexe' => request('sexe'),
            'pays' => request('pays'),
            'type' => 3, // =2 pour partenaire Valider | = 3 pour partenaire non valider
        ]);

        $util = partenaires::create([
            'partenaire_id' => $user->id,
            'diplome' => request('diplome'),
            'metier' => request('metier'),
            'experience' => request('experience'),
            'adresse'=> request('adresse'),
        ]);

        return redirect('/connexion');

    }

    public function AddAdmin(){
        request() -> validate([
            'email' => ['required','email'],
            'password' => ['required','confirmed','min:8'],
            'password_confirmation' => ['required'],
            'nom_complet' =>['required'],
            'num' => ['required'],
        ]);

        // Creation du nouveau profil dans la table users
        $user = user::create([
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),
            'nom' => request('nom_complet'),
            'tel' => request('num'),
            'type' => 0, // =0 pour admin
        ]);

        flash("Votre compte administrateur vient d'etre créer ")->success();

        return redirect('/connexion');
    }

    public function AddSu(){
        request() -> validate([
            'email' => ['required','email'],
            'password' => ['required','confirmed','min:8'],
            'password_confirmation' => ['required'],
            'nom_complet' =>['required'],
            'num' => ['required'],
        ]);

        // Creation du nouveau profil dans la table users
        $user = user::create([
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),
            'nom' => request('nom_complet'),
            'tel' => request('num'),
            'type' => -1, // =-1 pour suadmin
        ]);

        return redirect('/connexion');
    }
}
