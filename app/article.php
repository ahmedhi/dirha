<?php

namespace app;

use illuminate\Database\Eloquent\Model;
class article extends Model {
    protected $fillable = [
        'id_partenaire',
        'title',
        'source',
        'description',
        'categorie',
        'Like',
        'DisLike',
    ];
}