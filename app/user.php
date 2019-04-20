<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use \Illuminate\Auth\Authenticatable as BasicAuthAuthenticatable;
use Illuminate\Database\Eloquent\Model ;

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

}
