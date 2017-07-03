<?php

namespace App\Http\Controllers\Backend;

use App\Feature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeaturesController extends BackendController
{
    public function index() {

        $feature = Feature::find(1);
        return view('admin.features.index',compact('feature'));

    }

    public function update(){

        return redirect()->route('admin.features.index')->with(['message'=> 'You are in demo account']);

    }
}
