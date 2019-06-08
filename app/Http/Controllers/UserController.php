<?php

namespace App\Http\Controllers;

use App\aliment;
use App\article;
use App\menu;
use App\Message;
use App\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function liste(){

        $users = user::all();

        $articles = article::all();


        return view('index' , [
            'users' => $users ,
            'articles' => $articles,
        ]);

    }

    public function voir(){
        return  /*$user->email */
          view('/utilisateur' );

    }



}
