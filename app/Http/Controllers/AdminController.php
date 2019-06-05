<?php

namespace App\Http\Controllers;

use App\partenaires;
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

    public function infosPart()
    {
        $users = user::where ('id' , request('id') )->first0rfail() ;
        return view ('/infosPartenaire',['users'=>$users]);
    }

    public function AddP(){
            $part = user::where('id', request('id'))->firstOrfail();
            $part->type = 2 ;
            $part->save();
            return back();
    }

    public function DeleteP(){
            $part = partenaires::where('partenaire_id', request('id'))->delete();
            $part = user::where('id', request('id'))->firstOrfail();
            $part->type = 1 ;
            $part->save();
            return back();
    }

}
