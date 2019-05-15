<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
        public function index(){
            $users = user::all();

        return view('adminindex',[
            'users' => $users,
        ]);
    }

    public function clientArray(){
        $users = user::all();

        return view('ListeClient',[
            'users' => $users,
        ]);
    }

    public function partArray(){
        $users = user::all();

        return view('ListePartenaire',[
            'users' => $users,
        ]);
    }

    public function adminArray(){
        $users = user::all();

        return view('AddAdmin',[
            'users' => $users,
        ]);
    }

    public function checkPartenaire(){
            $users = user::all();

            return view('ListeCheckPartenaire',[
                'users' => $users,
            ]);
    }

}
