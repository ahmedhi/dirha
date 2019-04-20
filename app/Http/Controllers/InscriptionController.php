<?php

namespace App\Http\Controllers;

use App\user;
use App\utilisateurs;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function form(){
        return view('inscription');
    }

    public function Traitement(){
        request() -> validate([
            'email' => ['required','email'],
            'password' => ['required','confirmed','min:8'],
            'password_confirmation' => ['required'],
            'type' => ['required'],
        ]);

        switch ( request('type')){
            case 'admin' :          $type = 1;
                                    break;
            case 'utilisateur' :    $type = 2;
                                    break;
            case 'superadmin' :     $type = 0;
                                    break;
        }


        $user = user::create([
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),
            'type' => $type,
        ]);

        return redirect('/connexion'); ;

    }
}
