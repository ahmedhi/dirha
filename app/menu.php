<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $fillable = [
        'menu_id',
        'type_repas',
        'aliments',
        'proprietaire_id',
        'type_exercice',
        'type_evolution',
    ];
}
