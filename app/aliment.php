<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aliment extends Model
{
    protected $fillable = [
        'aliment_id',
        'nom',
        'energie_Kcal',
        'proteines',
        'glucides',
        'lipides',
        'fibres',
        'mineraux',
        'vitamines',
        'quantite',
    ];
}
