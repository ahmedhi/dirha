<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $fillable =[
        'id_partenaire',
        'title',
        'source',
        'description',
        'categorie',
        'Like',
        'DisLike',
        ];
}
