<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public $table = 'home';
    protected $fillable = ['title','desc','img'];
}
