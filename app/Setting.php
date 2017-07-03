<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public $table = 'setting';
    protected $fillable = [
        'logo','title','desc','keywords','footer'];
}
