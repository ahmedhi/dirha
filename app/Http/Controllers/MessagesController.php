<?php

namespace App\Http\Controllers;

use App\Message;

class MessagesController extends Controller
{
    public function new(){

        request() -> validate([
            'message' => ['required'],
        ]);

        auth()->user()->messages()->create([
            'contenu' => request('message'),
        ]);


        flash("Votre message a bien été effectuer")->success();
        return back();


    }
}
