<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class utilisateurs extends Model
{
    protected $fillable = [
        'email' ,
        'mot_de_passe',
        'type'
    ];
}
