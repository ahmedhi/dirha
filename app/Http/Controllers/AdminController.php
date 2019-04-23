<?php

namespace App\Http\Controllers;

use App\user;
use App\utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
        public function index(){
        $user = DB::table('users')
            ->join('utilisateurs','utilisateurs.id_user','users.id')
            ->get();
        $part = DB::table('users')
                ->join('partenaires','partenaires.id_partenaire','users.id')
                ->get();
        $numUser = DB::table('utilisateurs')->count();
        $numPart = DB::table('partenaires')->count();

        return view('adminindex',[
            'users' => $user,
            'parts' => $part,
            'numUser' => $numUser,
            'numPart' => $numPart,
        ]);
    }

    public function clientArray(){


        $user = DB::table('users')
                    ->join('utilisateurs','utilisateurs.id_user','users.id')
                    ->get();

        $numUser = DB::table('utilisateurs')->count();
        $numPart = DB::table('partenaires')->count();

        return view('ListeClient',[
            'users' => $user,
            'numUser' => $numUser,
            'numPart' => $numPart,
        ]);
    }

    public function partArray(){


        $part = DB::table('users')
            ->join('partenaires','partenaires.id_partenaire','users.id')
            ->get();

        $numUser = DB::table('utilisateurs')->count();
        $numPart = DB::table('partenaires')->count();

        return view('ListePartenaire',[
            'parts' => $part,
            'numUser' => $numUser,
            'numPart' => $numPart,
        ]);
    }

}
