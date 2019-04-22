<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $fillable = [
        'email' ,
        'mot_de_passe',
        'admin_Name',
        'tel',
    ];
}
