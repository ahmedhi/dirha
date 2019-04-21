<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class utilisateurs extends Model
{
    protected $fillable = [
        'id_user',
        'user_Name',
        'tel',
        'img',
        'taille',
        'poids',
        'date_de_naissance',
        'sexe',
        'pays',
    ];
}
