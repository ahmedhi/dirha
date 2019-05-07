<?php

namespace App\Http\Controllers;

use App\article;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    public function nouveau()
    {
        if (auth()->guest()) {
            flash("Vous devez etre connecté pour voir cette page.")->error();
            return redirect('/connexion');
        }

        request()->validate([
            'title' => ['required'],
            'article'=> ['required'],
            'source'=>  ['required'],
        ]);

        $artcl =  article:: create([
            'id_partenaire' => auth()->id(),
            'title' => request('title'),
            'source'=> request('source'),
            'description'=>request('article'),
            'Like' => 0,
            'Dislike' => 0 ,
            'categorie' => "",

        ]);

        return redirect('/00');
    }

    public function voir(){
        $ArtParts = DB::table('articles')
                        ->join('partenaires','partenaires.id_partenaire','articles.id_partenaire')
                        ->get();

        return view('acceuil',[
            'ArtParts' => $ArtParts,
        ]);
    }
}
