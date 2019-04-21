<?php

namespace app;

use illuminate\Database\Eloquent\Model;
class Article extends Model {
    protected $fillable = ['title','source','article'];
}