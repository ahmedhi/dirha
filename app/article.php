<?php

namespace app;

use illuminate\Database\Eloquent\Model;
class article extends Model {
    protected $fillable = ['title','source','article'];
}