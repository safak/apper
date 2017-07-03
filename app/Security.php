<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Security extends Model
{
    public $table = 'security';
    protected $fillable = ['title','desc','img'];
}
