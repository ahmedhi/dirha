<?php

namespace app;

use illuminate\Database\Eloquent\Model;
class article extends Model {
    protected $fillable = [
        'partenaire_id',
        'title',
        'source',
        'description',
        'categorie',
        'Like',
        'DisLike',
    ];

    public function users(){
        return $this->hasOne('App\user','id','partenaire_id');
    }

}