<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class superusers extends Model
{
    protected $fillable = [
        'email' ,
        'id_su',
        'mot_de_passe',
        'su_Name',
        'tel',
    ];
}
