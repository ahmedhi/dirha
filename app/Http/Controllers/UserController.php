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

    public function MenuListe(){
        $aliments = aliment::all();
        $randAl = aliment::all()->random(3);
        $Repas = menu::where( 'proprietaire_id' , auth()->user()->id )->get();
        $Pt = new menu;
        $Dej = new menu;
        $Col = new menu;
        $Din = new menu;
        foreach ( $Repas as $Re){
            switch( $Re->type_repas){
                case 1 :    $Pt = $Re;
                            break;
                case 2 :    $Dej = $Re;
                            break;
                case 3 :    $Pt = $Re;
                            break;
                case 4 :    $Din = $Re;
                            break;
            }
        }
        $aliment = new aliment;
        return view('menuListe',[
            'aliments' => $aliments,
            'randAl' => $randAl,
            //'Selectaliment' => $aliment,
            'PetitDej' => $Pt,
            'Dejeuner' => $Dej,
            'Collation' => $Col,
            'Diner' => $Din,
        ]);
    }

}
