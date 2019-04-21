<?php

namespace App\Http\Controllers;

use App\partenaires;
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
        return view('inscription');
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

    public function TraitementU(){
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

    public function TraitementP(){
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
            'type' => 2, // =2 pour partenaire
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
}
