<?php

namespace App\Http\Controllers;

use App\admin;
use App\partenaires;
use App\superusers;
use App\user;
use App\utilisateurs;
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
        return view('AddAdmin');
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

        // Creation du nouveau profil dans la table users
        $user = user::create([
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),
            'type' => 1, // =1 pour utilisateur normal
        ]);

        $nameFile = $this->SavePicture();

        $util = utilisateurs::create([
            'id_user' => $user->id,
            'user_Name' => request('nom_complet'),
            'img' => $nameFile,
            'tel' => request('num'),
            'date_de_naissance' => request('date'),
            'poids' => request('poids'),
            'taille' => request('taille'),
            'sexe' => request('sexe'),
            'pays' => request('pays'),
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

        // Creation du nouveau profil dans la table users
        $user = user::create([
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),
            'type' => 3, // =2 pour partenaire Valider | = 3 pour partenaire non valider
        ]);


        $nameFile = $this->SavePicture();

        $util = partenaires::create([
            'id_partenaire' => $user->id,
            'part_Name' => request('nom_complet'),
            'img' => $nameFile,
            'tel' => request('num'),
            'date_de_naissance' => request('date'),
            'poids' => request('poids'),
            'taille' => request('taille'),
            'sexe' => request('sexe'),
            'pays' => request('pays'),
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
            'type' => 0, // =0 pour admin
        ]);

        $admin = admin::create([
            'id_admin' => $user->id,
            'admin_Name' => request('nom_complet'),
            'tel' => request('num'),
        ]);

        flash("Votre compte administrateur vient d'etre créer ")->success();

        return redirect('/connexion');
    }

    public function AddSu(){ //NOT TESTED
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
            'type' => -1, // =-1 pour suadmin
        ]);

        superusers::create([
            'id_su' => $user->id,
            'su_Name' => request('nom_complet'),
            'tel' => request('num'),
        ]);

        return redirect('/connexion');
    }
}
