<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partenaires extends Model
{
    protected $fillable = [
        'partenaire_id',
        'diplome',
        'metier',
        'experience',
        'adresse',
    ];

    public function articles(){
        $this->hasMany(article::class);
    }
}
