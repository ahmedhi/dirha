<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Mail;
class  CompteController extends Controller
{
    public function acceuil(){

        return view('mon-compte');

    }

    public function infos(){
        return view('infosPersonnels');
    }

    public function formodif(){
        return view('modifInfos');
    }

    //use Mail;

    public function sendemail()
    {
        request()->validate([
            'message' => ['required'],
            'objet' => ['required'],
            'nom' => ['required'],
            'email' => ['required'],
        ]);
       /* $message = request('message');
        Mail::send('/contact', [], function($message)
        {
            $subject= request('sujet');
            $message->from('fallo072019@gmail.com');
            $message->to(request('email'))->subject($subject);
        });*/
        $title = request('objet');
        $content = request('message');
        $user_email = request('email');
        $user_name = request('nom');

        try
        {
            $data = ['email'=> $user_email,'name'=> $user_name,'subject' => $title, 'content' => $content];
            Mail::send('/contact', $data, function($message) use($data)
            {
                $subject=$data['subject'];
                $message->from('fallo072019@gmail.com');
                $message->to($data['email'], 'Fallo')->subject($subject);
            });
        }
        catch (\Exception $e)
        {
            dd($e->getMessage());
        }
    }

    public function modifinf(){
        request()->validate([
            'nom_complet' => ['required'],
            'date' => ['required'],
            'num' => ['required'],
            'taille' => ['required'],
            'poids' => ['required'],
        ]);
        $user = user::where('id',auth()->user()->id )->first();
        $user->email = auth()->user()->email ;
        $user->nom = request('nom_complet');
        $user->date_de_naissance = request('date') ;
        $user->tel = request('num') ;
        $user->taille = doubleval( request('taille') );
        $user->poids = doubleval (request('poids')) ;
        $user->save();

       return back();
    }

    public function modifpass(){


        if (Hash::check(request('ancienPassword'), auth()->user()->mot_de_passe)) {
            auth()->user()->update([
                'mot_de_passe' => bcrypt(request('password')),
            ]);
            return 'yes';
        }

        return back();

}

    public function cnt(){
        return view('contact');
    }


    public function deconnexion(){
        auth()->logout();

        flash("Vous etes maintenant deconnecter")->message();

        return redirect('/connexion');
    }


    public function ChangePwd(){

        request()->validate([
            'password' => ['required','confirmed','min:8'],
            'password_confirmation' => ['required'],
        ]);

        auth()->user()->update([
            'mot_de_passe' => bcrypt(request('password')),
        ]);

        flash("Votre mot de passe à bien été modifier")->success();

        return redirect("/mon-compte");
    }


}

/*<div class="sidebar-box ftco-animate">
                       <br><br> <h3 class="sidebar-heading">Modification de : </h3>
                        <ul class="tagcloud">
                            <a href="#" class="tag-cloud-link">Mot de passe </a>
                            <a href="#" class="tag-cloud-link">Nom Complet </a>
                            <a href="#" class="tag-cloud-link">Photo de profil</a>
                            <a href="#" class="tag-cloud-link">Taille</a>
                            <a href="#" class="tag-cloud-link">Poids</a>
                            <a href="#" class="tag-cloud-link">Date de naissance</a>
                            <a href="#" class="tag-cloud-link">Numero de Téléphone</a>
                        </ul>
                    </div>
*/