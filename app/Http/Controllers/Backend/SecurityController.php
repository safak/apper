<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SecurityController extends BackendController
{
    public function index() {

        return view('admin.security.index');

    }
}
