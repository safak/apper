<?php

namespace App\Http\Controllers\Backend;

use App\Security;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SecurityController extends BackendController
{
    public function index() {

        $security = Security::find(1);
        return view('admin.security.index', compact('security'));

    }

    public function update(){

        return redirect()->route('admin.security.index')->with(['message' => 'You are in demo account']);

    }
}
