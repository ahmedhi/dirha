<?php

namespace App\Http\Controllers;

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
        $email = request('email');

        $user = user::where('email' , $email)->firstOrFail();


        return view('utilisateur',[
            'user' => $user,
        ]);
    }


}
