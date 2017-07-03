<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public $table = 'feature';
    protected $fillable = ['t1','d1','i1','t2','d2','i2','t3','d3','i3','t4','d4','i4','t5','d5','i5'];
}
