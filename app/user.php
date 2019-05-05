<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use \Illuminate\Auth\Authenticatable as BasicAuthAuthenticatable;
use Illuminate\Database\Eloquent\Model ;
use App\utilisateurs;

class user extends Model implements Authenticatable {

    use BasicAuthAuthenticatable;

    protected $fillable = [
        'email' ,
        'mot_de_passe',
        'type'

    ];

    public function getAuthPassword()
    {
        return $this->mot_de_passe;
    }

    public function getRememberTokenName()
    {
        return '';
    }

    public function connect(){
        switch (auth()->user()->type){
            case 0 : return $this->hasOne(admin::class,'id_admin');

            case 1: return $this->belongsTo(utilisateurs::class, 'id_user','id_user');

            case 2: return $this->belongsTo(partenaires::class, 'id_partenaire');

            case -1 : return $this->hasOne(admin::class, 'id_admin');
        }
    }

    public function utilisateurs(){
        return $this->hasOne('App\utilisateurs','id_user','id');
    }

    public function partenaires(){
        return $this->hasOne('App\partenaires','id_partenaires','id');
    }

    public function admin(){
        return $this->hasOne('App\admin','id_admin','id');
    }

    public function su(){
        return $this->hasOne('App\superusers','id_su','id');
    }

}
