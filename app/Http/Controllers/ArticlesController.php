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

        $artcl =  article:: create([
            'id_partenaire'=> auth()->user()->id,
            'title' => request('title'),
            'source'=> request('source'),
            'description'=>request('article'),
            'categorie'=> "Test",
            'Like' => 0,
            'Dislike' => 0 ,

        ]);
        return redirected('/');
    }

    public function voir(){
        $articles = article::all();
        return view('acceuil',[
            'articles' => $articles,
        ]);
    }
}