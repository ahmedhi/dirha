<?php

namespace App\Http\Controllers;

use App\aliment;
use Illuminate\Http\Request;

class AlimentsController extends Controller
{
    public function voirAliment(){
        $aliments = aliment::all();

        return view('AddAliment',[
            'aliments' => $aliments,
        ]);
    }

    public function addAliment(){

            request() -> validate([
                'nom' => ['required'],
                'energie_Kcal' => ['required','min:0'],
                'proteines' => ['required','min:0'],
                'glucides' => ['required','min:0'],
                'lipides' => ['required','min:0'],
                'fibres' => ['required','min:0'],
                'mineraux' => ['required','min:0'],
                'vitamines' => ['required','min:0'],
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
                'mineraux' => request('mineraux'),
                'vitamines' => request('vitamines'),
                'quantite' => request('quantite'),
            ]);

            return back();
    }

}
