<?php

namespace App\Http\Controllers;

use App\aliment;
use App\menu;
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

    public function getAliment(){
        $SelectAliment = aliment::where('aliment_id',request('id'))->firstOrfail();

        return view('alimentSpec',[
            'Aliment' => $SelectAliment,
            'type' => request('type'),
        ]);
    }

    public function ActualiserMenu(){

        $menu = menu::where('proprietaire_id', auth()->user()->id)->get();

        if(count($menu) === 0){
            $me = menu::create([
                'type_repas' => request('type') ,
                'proprietaire_id' => auth()->user()->id ,
                'aliments' => request('nom') . ":" . request('nbr'),
            ]);
            $aliments[] = [ "nom" => request('nom') , "qte" => request('nbr') ];

            return view('menuPerso',[
                'aliments' => $aliments,
            ]);
        }

        $SpecMenu = new menu ;

        foreach ( $menu as $me){
            if( $me->type_repas == request('type')){
                $SpecMenu = $me ;
                break;
            }
        }

        //Structure DB : id1:Qt1 id2:Qt2 id3:Qt3 ...

        $aliments = explode(" ", $SpecMenu->aliments ); //decomposer la chaine en separant les aliments

        if( $aliments === "")
            $aliments = $SpecMenu->aliments;

        $Check = false ;
        $newaliment = "";

        foreach ( $aliments as $aliment){
            $AlimentArray = explode( ":" , $aliment); // decomposer les aliments en id et quantite

            if(!$AlimentArray[0] == "")
            {
                if ($AlimentArray[0] === request('nom')) {
                    $newaliment .= " " . $AlimentArray[0] . ":" . request('nbr');
                    $Check = true;
                } else {
                    $newaliment .= " " . $AlimentArray[0] . ":" . $AlimentArray[1];
                }

                $alimentArray[] = [ "nom" => $AlimentArray[0] , "qte" => $AlimentArray[1] ];
            }
        }

        if( !$Check ){
            $newaliment = $newaliment . " " . request('nom') . ":" . request('nbr') ;
            $alimentArray[] = [ "nom" => request('nom') , "qte" => request('nbr') ];
        }

        $SpecMenu->aliments = $newaliment ;
        menu::where('menu_id', $SpecMenu->menu_id)->delete();

        menu::create([
            'type_repas' => $SpecMenu->type_repas,
            'aliments' => $SpecMenu->aliments,
            'proprietaire_id' => $SpecMenu->proprietaire_id,
            'type_exercice' => $SpecMenu->type_exercice,
            'type_evolution' => $SpecMenu->type_evolution,
        ]);


        return view('menuPerso' , [
            'aliments' => $alimentArray ,
        ]) ;
    }

}
