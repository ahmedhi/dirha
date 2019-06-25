<?php

namespace App\Http\Controllers;

use App\user;
use App\aliment;
use App\article;
use App\menu;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function voirplusArticle(){
        $articles = article::where ('article_id' , request('article_id') )->firstOrfail() ;
        return view ('/voirplusArticle',['articles'=>$articles]);
    }

}

