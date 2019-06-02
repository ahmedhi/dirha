<?php

namespace App\Http\Controllers;

use App\aliment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Input;

class AlimentsController extends Controller
{
    public function voirAliment(){
        $aliments = aliment::all();

        return view('AddAliment',[
            'aliments' => $aliments,
        ]);
    }

    public function SavePictureAliment( $NomAliment ){
        // Save the profil picture

            $file = Input::file('icone');
            $file->move('img/aliment', $NomAliment.'.png' ); //l'image sera enregistrer dans public/img/aliment

    }

    public function addAliment(){

            request() -> validate([
                'nom' => ['required'],
                'icone' => ['required'],
                'energie_Kcal' => ['required','min:0'],
                'proteines' => ['required','min:0'],
                'glucides' => ['required','min:0'],
                'lipides' => ['required','min:0'],
                'fibres' => ['required','min:0'],
                'quantite' => ['required','min:0'],
            ]);

            // Creation d'un aliment
            $aliment = aliment::create([
                'nom' => request('nom'),
                'energie_Kcal' => request('energie_Kcal'),
                'proteines' => request('proteines'),
                'glucides' => request('glucides'),
                'lipides' => request('lipides'),
                'fibres' => request('fibres'),
                'quantite' => request('quantite'),
            ]);

            $this->SavePictureAliment(request('nom'));


        return back();
    }

    public function SpecAliment()
    {
        $q = intval($_GET['id']);
        return view('alimentSpec');
    }

}
