<?php

namespace App\Http\Controllers;

use App\user;
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
        ]);

        $user = \App\user::create([
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),
        ]);

        return "Nous avons recu votre email est " . request('email') ;

    }
}
