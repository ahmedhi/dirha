<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partenaires extends Model
{
    protected $fillable = [
        'id_partenaire',
        'part_Name',
        'tel',
        'img',
        'taille',
        'poids',
        'date_de_naissance',
        'sexe',
        'pays',
        'diplome',
        'metier',
        'experience',
        'adresse',
    ];
}
