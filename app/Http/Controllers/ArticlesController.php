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
            'categorie'=> ['required'],
        ]);

        $artcl =  article:: create([
            'partenaire_id' => auth()->id(),
            'title' => request('title'),
            'source'=> request('source'),
            'description'=>request('article'),
            'categorie'=>request('categorie'),
            'Like' => 0,
            'Dislike' => 0 ,

        ]);

        return redirect('/Bestarticles');
    }

    public function voir(){
        $Articles = article::all();

        if( auth()->check() and auth()->user()->type == 2)
            return view('addArticle',[
                'articles' => $Articles,
            ]);

        return view('articles',[
            'articles' => $Articles,
        ]);
    }
}
