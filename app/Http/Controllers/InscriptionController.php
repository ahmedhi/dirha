<?php

namespace App\Http\Controllers;

use App\user;
use App\utilisateurs;
use Illuminate\Http\Request;

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

    public function TraitementU(){
        request() -> validate([
            'email' => ['required','email'],
            'password' => ['required','confirmed','min:8'],
            'password_confirmation' => ['required'],
            'nom_complet' =>['required'],
            'image' => ['required'],
            'num' => ['required'],
            'date' => ['required','date_format'],
            'poids' => ['required'],
            'taille' => ['required'],
        ]);

        switch ( request('type')){
            case 'admin' :          $type = 1;
                                    break;
            case 'utilisateur' :    $type = 2;
                                    break;
            case 'superadmin' :     $type = 0;
                                    break;
        }

        $type = 1;

        $user = user::create([
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),
            'type' => $type,
        ]);

        return redirect('/connexion'); ;

    }

    public function TraitementP(){
        request() -> validate([
            'email' => ['required','email'],
            'password' => ['required','confirmed','min:8'],
            'password_confirmation' => ['required'],
            'nom_complet' =>['required'],
            'image' => ['required'],
            'num' => ['required'],
            'date' => ['required','date_format'],
            'poids' => ['required'],
            'taille' => ['required'],
            'fix' => ['required'],
            'diplome' => ['required'],
            'metier' => ['required'],
            'experience' => ['required'],
        ]);

        switch ( request('type')){
            case 'admin' :          $type = 0;
                break;
            case 'utilisateur' :    $type = 1;
                break;
            case 'superadmin' :     $type = -1;
                break;
        }

        $type = 3;

        $user = user::create([
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),
            'type' => $type,
        ]);

        return redirect('/connexion'); ;

    }
}
