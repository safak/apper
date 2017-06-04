<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeaturesController extends BackendController
{
    public function index() {

        return view('admin.features.index');

    }
}
