<?php

namespace App\Http\Controllers;

use App\article;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

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



        $article =  article:: create([
            'partenaire_id' => auth()->id(),
            'title' => request('title'),
            'source'=> request('source'),
            'img' => $this->SavePicture( @auth()->user()->nom . request('title')),
            'description'=>request('article'),
            'categorie'=>request('categorie'),
            'Like' => 0,
            'Dislike' => 0 ,

        ]);

        return redirect('/Bestarticles');
    }

    public function SavePicture($name){
        // Save the profil picture
        if( Input::file('img')){
            $file = Input::file('img');
            $file->move('img/articleBackground', $file->getClientOriginalName() );
            return $file->getClientOriginalName() ;
        }
        else {
            return "backDefault.jpg";
        }
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
