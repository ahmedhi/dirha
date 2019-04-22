<?php

namespace App\Http\Controllers;

use App\article;

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

        $id = 17;

        $artcl =  article:: create([
            'id_partenaire' => $id,
            'title' => request('title'),
            'source'=> request('source'),
            'description'=>request('article'),
            'Like' => $id,
            'Dislike' => $id ,
            'categorie' => "Article tres interressant",

        ]);

        return redirect('/00');
    }

    public function voir(){
        $articles = article::all();
        return view('acceuil',[
            'articles' => $articles,
        ]);
    }
}
