<?php

namespace App\Http\Controllers;

use App\aliment;
use App\menu;
use App\Message;
use App\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function liste(){

        $users = user::all();

        return view('utilisateurs' , [
            'users' => $users ,
        ]);

    }

    public function voir(){
        return  /*$user->email */
          view('/utilisateur' );

    }



}
